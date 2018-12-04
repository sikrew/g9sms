<?php

return [

    /*
     * The url that will be used to send the text messages
     */
    'url' => env('G9URL', null),

    /*
     * The username that will be used to send the text messages
     */
    'username' => env('G9USERNAME', null),

    /*
     * The user's password
     */
    'password' => env('G9PASSWORD', null),

    /*
     * The type of the text message that will be sent. The following types are available:
     * 0: Plain text (GSM 03.38 encoding)
     * 1: Flash (GSM 03.38 encoding)
     * 2: Unicode (UTF‐16‐BE encoding)
     * 8: VMS TTS
     * 9: VMS audio
     *
     * Default is 0.
     */
    'type' => env('G9SMSTYPE', 0),

    /*
     * Whether or not to get a delivery report upon sending the message. The following values are available:
     * 0: No.
     * 1: Yes.
     *
     * Default is Yes.
     */
    'dlr' => env('G9SMSDLR', 1),

    /*
     * The source that will be used to send the text messages
     */
    'source' => env('G9SOURCE', null),


];
