<?php

/* output.tpl */
class __TwigTemplate_527992a7be59733b43643878141ca0303cbfbe675c206d43b747e77c7c1a8f0c extends Twig_Template
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
<title>にわとりblog 表示画面</title>
</head>
<body>
<h1>にわとりblog 表示画面</h1>
<h2>投稿者</h2>
<p>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</p>
<h2>投稿日</h2>
<p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["create_date"]) ? $context["create_date"] : null), "html", null, true);
        echo "</p>
<h2>本文</h2>
<p>
";
        // line 15
        echo nl2br(twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true));
        echo "
</p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "output.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  35 => 12,  30 => 10,  19 => 1,);
    }
}
