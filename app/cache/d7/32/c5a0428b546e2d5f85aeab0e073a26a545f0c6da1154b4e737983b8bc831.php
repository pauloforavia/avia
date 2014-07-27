<?php

/* ITSAtlasBundle:Secured:registration_success_mail.html.twig */
class __TwigTemplate_d732c5a0428b546e2d5f85aeab0e073a26a545f0c6da1154b4e737983b8bc831 extends Twig_Template
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
        echo "Уважаемый пользователь!
Вы успешно зарегистрировались!

Ваше имя: ";
        // line 4
        if (isset($context["first_name"])) { $_first_name_ = $context["first_name"]; } else { $_first_name_ = null; }
        echo twig_escape_filter($this->env, $_first_name_, "html", null, true);
        echo "
Ваша фамилия: ";
        // line 5
        if (isset($context["last_name"])) { $_last_name_ = $context["last_name"]; } else { $_last_name_ = null; }
        echo twig_escape_filter($this->env, $_last_name_, "html", null, true);
        echo "
Ваш пароль: ";
        // line 6
        if (isset($context["password"])) { $_password_ = $context["password"]; } else { $_password_ = null; }
        echo twig_escape_filter($this->env, $_password_, "html", null, true);
        echo ".";
    }

    public function getTemplateName()
    {
        return "ITSAtlasBundle:Secured:registration_success_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
