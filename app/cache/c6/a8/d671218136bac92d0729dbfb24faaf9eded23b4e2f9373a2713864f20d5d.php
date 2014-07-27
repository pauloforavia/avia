<?php

/* ITSAtlasBundle:Secured:registration_success.html.twig */
class __TwigTemplate_c6a8d671218136bac92d0729dbfb24faaf9eded23b4e2f9373a2713864f20d5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Регистрация успешно пройдена. <br>
На Ваш E-mail адрес выслано письмо.<br>
<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("mainpage");
        echo "\"><input type=\"button\" value=\"Главная\"></a>
<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("registration");
        echo "\"><input type=\"button\" value=\"Зарегистрироваться повторно\"></a>";
    }

    public function getTemplateName()
    {
        return "ITSAtlasBundle:Secured:registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
