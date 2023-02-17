<?php
    namespace libreria;

    enum TiposInput : string {
        case DATE = "date";
        case TEXT = "text";
        case EMAIL = "email";
        case HIDDEN = "hidden";
        case NUMBER = "number";
        case PASSWD = "password";
        case RADIO_BUTTON = "radio";
        case SELECT = "select";
        case CHECKBOX = "checkbox";
    }
?>