<?php
    if(isset($_COOKIE['toast_message'])){
        echo "
            <style>
                .toast{
                    opacity: 0;
                    display: block;
                    position: fixed;
                    width: 300px;
                    bottom: 20;
                    left: 20;
                    background-color: #000000; 
                    color: #EEEEEE;
                    box-shadow: 0 3.0px 6.00px rgba(0,0,0,0.16), 0 3.0px 6.0px rgba(0,0,0,0.2300);
                    padding: 18px;
                    border-radius: 4px;
                    z-index: 1000;
                    animation-name: toast;
                    animation-duration: 4s;
                    animation-iteration-count: 1;
                    animation-direction: alternate; /* or: normal */
                    animation-timing-function: ease-out; /* or: ease, ease-in, ease-in-out, linear, cubic-bezier(x1, y1, x2, y2) */
                    animation-fill-mode: forwards; /* or: backwards, both, none */
                    animation-delay: 200ms; /* or: 1s */
                }
                @keyframes toast {
                    0% {
                        opacity: 0;
                    }
                    15%{
                        opacity: 1;
                    }
                    85%{
                        opacity: 1;
                    }
                    100% {
                        opacity: 0;
                    }
                }
            </style>
        
            <div class='toast'>
            ";

        echo $_COOKIE['toast_message'];

        echo "</div>";

        unset($_COOKIE['toast_message']); 
        setcookie('toast_message', null, -1, '/'); 

    }
    ?>