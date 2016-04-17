<?php

namespace ITS\AtlasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction(Request $request)
    {
        return $this->render('ITSAtlasBundle:Default:index.html.twig');
    }

    public function arrayAction(Request $request)
    {
        $message_error = "";
        $final_array = array();
        $default_array = array(
            'P/RU/711071320/RU/14JUN74/F/21JUN20/KOLENCHENKO/NINA -1KOLENCHENKO/NINAMRS',
            'C/RU/7412424446/RU/28AUG58/M/28JUL26/GAZIL/VIKTOR/IVANOVICH -1GAZIL/VIKTORIVANOVICHMR',
            'P/RU/637670195/RU/17JUL03/M/08FEB18/KOLENCHENKO/ARTEM -1KOLENCHENKO/ARTEMMSTR'
        );

        foreach($default_array as $default_string)
        {
            if(preg_match("/[\/]([A-Z\/]{2,}) -1/", $default_string, $names) &&
                preg_match('/(MR|MRS|MSTR)$/', $default_string, $accosts))
            {
                $name = preg_split('/\//', $names[1]);
                $accost = $accosts[1];
                // вывожу без отчества, как и было в задании, но вывести его не составляет труда, тк доступ к нему есть
                // через переменную $name
                $final_array[] = array($name[0], $name[1], $accost);
				//dgsdnsdgjds
            }
            else
            {
                $message_error = "Неверный формат данных";
            }
        }

        return $this->render('ITSAtlasBundle:Default:array.html.twig', array(
            'final_array' => $final_array,
            'message_error' => $message_error,
        ));
    }

    /*
     * Либо я не так понял задачу, либо она действительно легкая...
     * И зачем нужна была документация я тоже не знаю)
     *
     * */
    public function xmlAction(Request $request) {

        if (file_exists("sample.xml")) {
            $xml = simplexml_load_file("sample.xml");
        } else {
            exit('Не удалось открыть файл sample.xml.');
        }
        foreach ($xml->xpath('//TkNum') as $number) {
            $tickets[] = $number;
        }

        return $this->render('ITSAtlasBundle:Default:sample_xml.html.twig', array(
            'tickets' => $tickets,
        ));
    }
}