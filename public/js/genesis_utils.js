//region Array Functions
Array.prototype.indexOfObject = function arrayObjectIndexOf(value) {
    if (typeof value !== 'undefined') {
        if (value.constructor.name === 'trolley_item') {
            for (let i = 0, len = this.length; i < len; i++) {
                const obj = this[i];
                if (typeof obj !== 'undefined') {
                    if (obj.cart_variant === value.cart_variant &&
                        obj.cart_code === value.cart_code &&
                        obj.cart_size === value.cart_size &&
                        obj.cart_case === value.cart_case &&
                        obj.cart_line === value.cart_line) {

                        return i;
                    }
                }
            }
            return -1;
        } else if (value.constructor.name === 'codemaster_item') {
            for (let i = 0, len = this.length; i < len; i++) {
                const obj = this[i];
                if (typeof obj !== 'undefined') {
                    if (obj.code === value.code) {
                        return i;
                    }
                }
            }
            return -1;
        } else if (value.constructor.name === 'form_item') {
            for (let i = 0, len = this.length; i < len; i++) {
                const obj = this[i];
                if (typeof obj !== 'undefined') {
                    if (obj.code === value.code) {
                        return i;
                    }
                }
            }
            return -1;
        } else if (value.constructor.name === 'trolley_address') {
            for (let i = 0, len = this.length; i < len; i++) {
                const obj = this[i];
                if (typeof obj !== 'undefined') {
                    if (obj.address01 === value.address01 &&
                        obj.address02 === value.address02 &&
                        obj.address03 === value.address03 &&
                        obj.address04 === value.address04) {
                        return i;
                    }
                }
            }
            return -1;
        }
        return this.indexOf(value);
    } else {
        return -1;
    }
}
if (typeof Array.remove_index === 'undefined') {
    Array.prototype.remove_index = function (el) {
        if (el !== -1) {
            this.splice(el, 1);
        }
    }
}
if (typeof Array.remove === 'undefined') {
    Array.prototype.remove = function (el) {
        const index = this.indexOfObject(el);
        if (index !== -1) {
            this.splice(index, 1);
        }
    }
}
if (typeof Array.addObject === 'undefined') {
    Array.prototype.addObject = function (el) {
        if (this.indexOfObject(el) === -1) {
            this.push(el);
        }
    }
}
if (typeof Array.contains === 'undefined') {
    Array.prototype.contains = function (el) {
        return this.indexOf(el) !== -1;
    }
}
if (typeof Array.toggle === 'undefined') {
    Array.prototype.toggle = function (el) {
        if (this.indexOf(el) === -1) {
            this.addObject(el);
        } else this.remove(el);
    }
}
function json2array(json) {
    const result = [];
    const keys = Object.keys(json);
    keys.forEach(function (key) {
        result.push(json[key]);
    });
    return result;
}
if (typeof Array.isArray === 'undefined') {
    Array.isArray = function (obj) {
        return Object.prototype.toString.call(obj) === '[object Array]';
    }
}
//endregion
//region String Functions
String.prototype.isEmpty = function () {
    return (this.length === 0 || !this.trim());
}
String.prototype.toString = function () {
    if (!!this) {
        return this + '';
    } else {
        return "";
    }
}
if (!String.prototype.startsWith) {
    Object.defineProperty(String.prototype, 'startsWith', {
        value: function (search, rawPos) {
            const pos = rawPos > 0 ? rawPos | 0 : 0;
            return this.substring(pos, pos + search.length) === search;
        }
    });
}
if (!String.prototype.includes) {
    String.prototype.includes = function (search, start) {
        'use strict';
        if (typeof start !== 'number') {
            start = 0;
        }

        if (start + search.length > this.length) {
            return false;
        } else {
            return this.indexOf(search, start) !== -1;
        }
    };
}
//endregion
//region Network
function Offline_Message(main_error_title, main_error_message) {
    try {

        if (typeof main_error_title === 'undefined' || main_error_title === null) {
            main_error_title = "Offline";
        }
        if (typeof main_error_message === 'undefined' || main_error_message === null) {
            main_error_message = "Sorry, No Network Connection Found!!";
        }
        $("#network_error_title").html(main_error_title);
        $("#network_error_contents").html(main_error_message);
        $('#network_error').modal('show');
        $('#network_error').on('hide.bs.modal', function () {
            window.location.reload();
        });
        $(".btn-reload").click(function () {
            window.location.reload();
            return false
        });
    } catch (e) {
        toastr.error(e.message, "Offline");
    }
}
function checkNetwork() {
    try {
        if (!navigator.onLine) {
            if (!checkServer(AppHost, 1000)) {
                Offline_Message("Offline", "Sorry, No Network Connection Found!!");
            }
        }
    } catch (e) {
        toastr.error(e.message, "Network");
    }
}
function checkServer(url, timeout) {
    try {
        const controller = new AbortController();
        const signal = controller.signal;
        const options = {mode: 'no-cors', signal};
        return fetch(url, options)
            .then(setTimeout(() => {
                controller.abort()
            }, timeout))
            .then(response => console.log('Check server response:', response.statusText))
            .catch(error => console.error('Check server error:', error.message));
    } catch (e) {
        return false;
    }
}
//region JSON
const getJSON = function (url, callback, async) {
    try {

        const xhr = new XMLHttpRequest();
        if (typeof async !== 'undefined' && async !== null) {
            xhr.open('GET', url, async);

        } else {
            xhr.open('GET', url, true);
        }
        xhr.onload = function () {
            try {
                const status = xhr.status;
                const res_json = JSON.parse(xhr.response);
                if (IsJsonString(xhr.response)) {
                    if (status === 200) {
                        callback(null, res_json);
                    } else if (status > 300) {
                        callback("#13", "Redirection Error");
                    } else if (status > 400) {
                        callback("#13", "Client Error");
                    } else if (status > 500) {
                        callback("#13", "Bad Gateway");
                    } else {
                        callback(status, res_json);
                    }
                } else {
                    callback(status, xhr.response);
                }
            } catch (e) {
                callback("#13", e);
            }
        };
        xhr.onerror = function () {

        };
        xhr.send();
        return xhr;

    } catch (e) {

        callback("#13", e.message);

    }

};
const postJSON = function (url, data, callback, async) {
    if (navigator.onLine) {
        const xhr = new XMLHttpRequest();
        // xhr.responseType = 'json';
        if (typeof async !== 'undefined' && async !== null) {
            xhr.open('POST', url, async);
        }else {
            xhr.open('POST', url, true);
        }
        xhr.onload = function () {
            let res_json = "";
            try {
                const status = xhr.status;

                if (IsJsonString(xhr.response)) {
                    res_json = JSON.parse(xhr.response);
                    if (status === 200) {
                        callback(null, res_json);
                    } else if (status > 300) {
                        callback("#13", "Redirection Error");
                    } else if (status > 400) {
                        callback("#13", "Client Error");
                    } else if (status > 500) {
                        callback("#13", "Bad Gateway");
                    } else {
                        callback(status, res_json);
                    }
                } else {
                    callback("#13", xhr.response);
                    console.error(xhr.response);
                    // callback(status, xhr.response);
                }
            } catch (e) {
                callback("#13", e);
                console.error(e);
            }
        };
        xhr.onerror = function () {

        };

        xhr.send(data);
        return xhr;
    } else {
        callback("#13", "Sorry, No Network Connection Found!!");
    }

};
const postJSON_with_JSON = function (url, data, callback) {
    //  header("access-control-allow-origin: *");

    const xhr = new XMLHttpRequest();
    // xhr.timeout = 4000;  // Reduce default 2mn-like timeout to 4 s if synchronous
    //xhr.responseType = 'json';
    xhr.open('POST', url, false);
    xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
    xhr.onload = function () {
        const status = xhr.status;
        if (status === 200) {
            callback(null, JSON.parse(xhr.response));
        } else {
            callback(status, JSON.parse(xhr.response));
        }
    };
    xhr.send(JSON.stringify(data));
    return xhr;

};
const getJSON_with_JSON = function (url, data, callback) {
    //  header("access-control-allow-origin: *");

    const xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('GET', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
    xhr.onload = function () {
        const status = xhr.status;
        if (status === 200) {
            callback(null, xhr.response);
        } else {
            callback(status, xhr.response);
        }
    };
    xhr.send(JSON.stringify(data));
    return xhr;

};
function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return '';
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
function IsJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}
//endregion
//endregion
//region Devices
function getDeviceName() {
    let deviceName = '';
    try {
        const isMobile = {
            Android: function () {
                return navigator.userAgent.match(/Android/i);
            },
            Datalogic: function () {
                return navigator.userAgent.match(/DL-AXIS/i);
            },
            Bluebird: function () {
                return navigator.userAgent.match(/EF500/i);
            },
            Honeywell: function () {
                return navigator.userAgent.match(/CT50/i);
            },
            Zebra: function () {
                return navigator.userAgent.match(/TC70|TC55/i);
            },
            BlackBerry: function () {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function () {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Windows: function () {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function () {
                return (isMobile.Datalogic() || isMobile.Bluebird() || isMobile.Honeywell() || isMobile.Zebra() || isMobile.BlackBerry() || isMobile.Android() || isMobile.iOS() || isMobile.Windows());
            }
        };

        if (isMobile.Datalogic())
            deviceName = 'Datalogic';
        else if (isMobile.Bluebird())
            deviceName = 'Bluebird';
        else if (isMobile.Honeywell())
            deviceName = 'Honeywell';
        else if (isMobile.Zebra())
            deviceName = 'Zebra';
        else if (isMobile.BlackBerry())
            deviceName = 'BlackBerry';
        else if (isMobile.iOS())
            deviceName = 'iOS';
        else if ((deviceName === '') && (isMobile.Android()))
            deviceName = 'Android';
        else if ((deviceName === '') && (isMobile.Windows()))
            deviceName = 'Windows';
    } catch (e) {

    }
    return deviceName;
}

let isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
//endregion

//region Pop Up Windows
const pop_w=800;
const pop_h=500;
/*const pop_left  = (screen.width/2)-(pop_w/2);
const pop_top = (screen.height/2)-(pop_h/2);*/
const pop_top = window.outerHeight / 2 + window.screenY - ( pop_h / 2)
const pop_left = window.outerWidth / 2 + window.screenX - ( pop_w / 2)

const pad_w=400;
const pad_h=500;
/*const pop_left  = (screen.width/2)-(pop_w/2);
const pop_top = (screen.height/2)-(pop_h/2);*/
const pad_top = window.outerHeight / 2 + window.screenY - ( pad_h / 2)
const pad_left = window.outerWidth / 2 + window.screenX - ( pad_w / 2)

//region Company Groups
function openPopUpGroups() {
    var win = window.open(AppHost+'CMS/Windows/COGROUPS/', '_blank', 'toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, copyhistory=no, width=' + pop_w + ', height=' + pop_h + ', top=' + pop_top + ', left=' + pop_left);
    // pass the targetField to the pop up window
    win.focus();
}
//endregion
//endregion
//region Autocomplete

function autocomplete(e, t) {
    let n;

    function i(e) {
        if (!e) return !1;
        !function (e) {
            for (let t = 0; t < e.length; t++) e[t].classList.remove("autocomplete-active")
        }(e), n >= e.length && (n = 0), n < 0 && (n = e.length - 1), e[n].classList.add("autocomplete-active")
    }

    function l(t) {
        const n = document.getElementsByClassName("autocomplete-items");
        for (let i = 0; i < n.length; i++) t !== n[i] && t !== e && n[i].parentNode.removeChild(n[i])
    }

    null !== e && (e.addEventListener("input", function (i) {
        let o, s, a;
        const u = this.value;
        if (l(), !u) return !1;
        for (n = -1, (o = document.createElement("DIV")).setAttribute("id", this.id + "autocomplete-list"), o.setAttribute("class", "autocomplete-items"), this.parentNode.appendChild(o), a = 0; a < t.length; a++) t[a].substr(0, u.length).toUpperCase() === u.toUpperCase() && ((s = document.createElement("DIV")).innerHTML = "<strong>" + t[a].substr(0, u.length) + "</strong>", s.innerHTML += t[a].substr(u.length), s.innerHTML += "<input type='hidden' value='" + t[a] + "'>",
            s.addEventListener("click", function (t) {
                e.value = this.getElementsByTagName("input")[0].value
                    , l();
                if (!e.value.isEmpty()) {
                    $("#frmSearch").trigger("submit");
                }
            }), o.appendChild(s))
    }), e.addEventListener("keydown", function (e) {
        let t = document.getElementById(this.id + "autocomplete-list");
        t && (t = t.getElementsByTagName("div")), 40 === e.keyCode ? (n++, i(t)) : 38 === e.keyCode ? (n--, i(t)) : 13 === e.keyCode && n > -1 && (e.preventDefault(), t && t[n].click())
    })), document.addEventListener("click", function (e) {
        l(e.target)
    })
}

function autocompleteEnter(e, t, n) {
    let i;

    function l(e) {
        if (!e) return !1;
        !function (e) {
            for (let t = 0; t < e.length; t++) e[t].classList.remove("autocomplete-active")
        }(e), i >= e.length && (i = 0), i < 0 && (i = e.length - 1), e[i].classList.add("autocomplete-active")
    }

    function o(t) {
        const n = document.getElementsByClassName("autocomplete-items");
        for (let i = 0; i < n.length; i++) t !== n[i] && t !== e && n[i].parentNode.removeChild(n[i])
    }

    null !== e && (e.addEventListener("input", function (l) {
        let s, a, u;
        const c = this.value;
        if (o(), !c) return !1;
        for (i = -1, (s = document.createElement("DIV")).setAttribute("id", this.id + "autocomplete-list"), s.setAttribute("class", "autocomplete-items"), this.parentNode.appendChild(s), u = 0; u < n.length; u++) n[u].substr(0, c.length).toUpperCase() === c.toUpperCase() && ((a = document.createElement("DIV")).innerHTML = "<strong>" + n[u].substr(0, c.length) + "</strong>", a.innerHTML += n[u].substr(c.length), a.innerHTML += "<input type='hidden' value='" + n[u] + "'>", a.addEventListener("click", function (n) {
            e.value = this.getElementsByTagName("input")[0].value, o(), t.submit()
        }), s.appendChild(a))
    }), e.addEventListener("keydown", function (e) {
        let t = document.getElementById(this.id + "autocomplete-list");
        t && (t = t.getElementsByTagName("div")), 40 === e.keyCode ? (i++, l(t)) : 38 === e.keyCode ? (i--, l(t)) : 13 === e.keyCode && i > -1 && (e.preventDefault(), t && t[i].click())
    })), document.addEventListener("click", function (e) {
        o(e.target)
    })
}

//endregion
//region Paginate
function paginate_function(wItem_per_page, current_page, total_records, total_pages) {
    let pagination = '';
    pagination += '<div class="clearfix"></div>';
    pagination += '<nav class="Page navigation" style="padding-bottom: 10px">';
    if (total_pages > 0 && total_pages !== 1 && current_page <= total_pages) { // verify total pages and current page number
        pagination += '<ul class="pagination" style="float: right;padding-right: 1em">';

        const right_links = current_page + 3;
        const previous = current_page - 3; // previous link
        const next = current_page + 1; // next link
        let first_link = true; // boolean var to decide our first link
        let i = 0;
        if (current_page > 1) {
            const previous_link = (previous === 0) ? 1 : previous;
            pagination += '<li class="page-item first"><a class="page-link" href="#" data-page="1" title="First">&laquo;</a></li>'; // first link

            for (i = (current_page - 2); i < current_page; i++) { // Create left-hand side links
                if (i > 0) {
                    pagination += '<li class="page-item"><a class="page-link" href="#" data-page="' + i + '" title="Page' + i + '">' + i + '</a></li>';
                }
            }
            first_link = false; // set first link to false
        }

        if (first_link) { // if current active page is first link
            pagination += '<li class="page-item first active"><a class="page-link" href="#" data-page="' + current_page + '"> ' + current_page + '</a></li>';
        } else if (current_page === total_pages) { // if it's the last active link
            pagination += '<li class="page-item last active"><a class="page-link" href="#" data-page="' + current_page + '"> ' + current_page + '</a></li>';
        } else { // regular current link
            pagination += '<li class="page-item active"><a class="page-link"  href="#" data-page="' + current_page + '"> ' + current_page + '</a></li>';
        }

        for (i = current_page + 1; i < right_links; i++) { // create right-hand side links
            if (i <= total_pages) {
                pagination += '<li class="page-item"><a class="page-link" href="#" data-page="' + i + '" title="Page ' + i + '">' + i + '</a></li>';
            }
        }
        if (current_page < total_pages) {
            const next_link = (i > total_pages) ? total_pages : i;

            pagination += '<li class="page-item last"><a class="page-link" href="#" data-page="' + total_pages + '" title="Last">&raquo;</a></li>'; // last link
        }
        pagination += '</ul>';
        pagination += '</nav>';

    }
    pagination += '<div class="clearfix"></div>';
    return pagination; // return pagination links
}
function addEventListenerOnce(target, type, listener, addOptions, removeOptions) {
    target.addEventListener(type, function fn(event) {
        target.removeEventListener(type, fn, removeOptions);
        listener.apply(this, arguments);
    }, addOptions);
}
//endregion
