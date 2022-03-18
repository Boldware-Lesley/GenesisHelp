<?php
if(empty(session_id())){
    @session_start();
}
unset ( $_SESSION ["ACCOUNT"] );
unset ( $_SESSION ["USER"] );


redirect(MAIN_URL);
