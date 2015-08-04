<?php

/* done.tpl */
class __TwigTemplate_09519adc4b79c72ccec353aef23e5450d2ab5c55fca033f2f121f3ef4fd0e14d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
<meta name=\"charset\" content=\"UTF-8\">
<title>にわとりblog 投稿完了!</title>
</head>
<body>
<h1>にわとりblog 投稿完了</h1>
<h2>投稿者</h2>
<p>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</p>
<h2>本文</h2>
<p>
";
        // line 13
        echo nl2br(twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true));
        echo "
</p>
で、投稿しました!
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "done.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  30 => 10,  19 => 1,);
    }
}
