<?php
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
*   Time  : 13.08.2015 13:44:10
*
*   KULLANIM
*   https://www.iletimerkezi.com/
*   http://toplusmsapi.com/
 *
        $this->model("iletimerkezi");

        $var = new iletimerkezi();

        $var->params = array(
            "username"      => "KULLANICI ADI",
            "password"      => "ŞİFRENİZ",
            "text"          => "GÖNDERECEĞİNİZ MESAJ",
            "receipents"    => "GÖNDERİLECEK NUMARALAR VİRGÜL İLE AYRINIZ",
            "sender"        => "KAYITLI MESAJ BAŞLIGI",

        );

        $var->sender();

**/


class iletimerkezi {

    /*
     *
     * İletimerkezi Api Url
     * @Mixed
     *
     * */
    public $api = "http://api.iletimerkezi.com/v1/send-sms/get/?";

    /*
     *
     * İletimerkezi Api Url
     * @Mixed
     * ["username","password","text","receipents","sender"]
     *
     * */
    public static $params = [];


    public static function send(){

        $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL =>
                        $this->api."username=".$this->params["username"]."&password=".$this->params["password"]."&text=".$this->params["text"]."&receipents=".$this->params["receipents"]."&sender=".$this->params["sender"],
                    CURLOPT_USERAGENT => 'Fix Framework'
                ));

        $var =  curl_exec($curl);

                curl_close($curl);

        $p = xml_parser_create();
        xml_parse_into_struct($p, $var, $vals, $index);
        xml_parser_free($p);

        return $vals;

    }








}