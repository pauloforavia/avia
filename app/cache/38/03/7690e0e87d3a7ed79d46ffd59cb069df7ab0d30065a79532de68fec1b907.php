<?php

/* ITSAtlasBundle:Secured:register.html.twig */
class __TwigTemplate_38037690e0e87d3a7ed79d46ffd59cb069df7ab0d30065a79532de68fec1b907 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("registration");
        echo "\" method=\"post\" ";
        if (isset($context["register_form"])) { $_register_form_ = $context["register_form"]; } else { $_register_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_register_form_, 'enctype');
        echo ">
    ";
        // line 2
        if (isset($context["register_form"])) { $_register_form_ = $context["register_form"]; } else { $_register_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_register_form_, 'widget');
        echo "
";
        // line 3
        if (isset($context["message_error"])) { $_message_error_ = $context["message_error"]; } else { $_message_error_ = null; }
        echo twig_escape_filter($this->env, $_message_error_, "html", null, true);
        echo "
    <br>
    <input type=\"submit\" />
    <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("mainpage");
        echo "\"><input type=\"button\" value=\"Главная\"></a>
</form>";
    }

    public function getTemplateName()
    {
        return "ITSAtlasBundle:Secured:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  32 => 3,  27 => 2,  19 => 1,);
    }
}
