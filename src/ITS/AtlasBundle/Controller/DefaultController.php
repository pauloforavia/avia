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

        $default_array = array(
            'P/RU/711071320/RU/14JUN74/F/21JUN20/KOLENCHENKO/NINA -1KOLENCHENKO/NINAMRS',
            'P/RU/722471093/RU/25JUN96/F/23JAN23/MUKHACHEVA/ANNA -1MUKHACHEVA/ANNAMRS',
            'P/RU/637670195/RU/17JUL03/M/08FEB18/KOLENCHENKO/ARTEM -1KOLENCHENKO/ARTEMMSTR'
        );

        foreach($default_array as $default_string)
        {
            $a = explode('/', $default_string);
            $b = explode(' -1', $a[8]);
            $accost = substr($a[9], strlen($b[0]));
            $final_array[] = array($b[1], $b[0], $accost);
        }
        return $this->render('ITSAtlasBundle:Default:array.html.twig', array(
            'final_array' => $final_array,
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