<?php

namespace ITS\AtlasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecuredController extends Controller
{
    public function registerAction(Request $request)
    {
        $form_request = $request->request->get('form');

        $register_form = $this->createFormBuilder()
            ->add('last_name', 'text',
                array('required' => 'true',
                    'label' => 'Фамилия'))
            ->add('first_name', 'text',
                array('required' => 'true',
                    'label' => 'Имя'))
            ->add('username', 'email',
                array('required' => 'true',
                    'label' => 'e-mail'))
            ->add('password', 'password',
                array('required' => 'true',
                    'label' => 'Пароль'))
            ->getForm();

        if ($request->getMethod() == 'POST')
        {
            $register_form->bind($request);
            if ($register_form->isValid())
            {
                if(filter_var($form_request['username'], FILTER_VALIDATE_EMAIL))
                {
                    $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                        ->setUsername('avia.avia.sales@gmail.com')
                        ->setPassword('mnbvcxzaq');
                    $mailer = \Swift_Mailer::newInstance($transport);
                    $message = \Swift_Message::newInstance()
                        ->setSubject('Регистрация прошла успешно!')
                        ->setFrom(array('administration@avia.ru' => 'Avia'))
                        ->setTo($form_request['username'])
                        ->setBody($this->renderView('ITSAtlasBundle:Secured:registration_success_mail.html.twig', array(
                            'first_name' => $form_request['first_name'],
                            'last_name' => $form_request['last_name'],
                            'password' => $form_request['password'],
                        )))
                    ;
                    $mailer->send($message);

                    return $this->redirect($this->generateUrl('registration_success'));
                }
                else
                {
                    return $this->render('ITSAtlasBundle:Secured:register.html.twig', array(
                        'register_form' => $register_form->createView(),
                        'message_error' => $message_error = 'Введен некорректный e-mail адрес.'
                    ));
                }
                }
        }

        return $this->render('ITSAtlasBundle:Secured:register.html.twig', array(
            'register_form' => $register_form->createView(),
            'message_error' => $message_error = ''
        ));
    }

    public function registerSuccessAction(Request $request)
    {
        return $this->render('ITSAtlasBundle:Secured:registration_success.html.twig');
    }
}