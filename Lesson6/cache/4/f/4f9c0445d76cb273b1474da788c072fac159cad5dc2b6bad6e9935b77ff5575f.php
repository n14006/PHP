<?php

/* done.tpl */
class __TwigTemplate_4f9c0445d76cb273b1474da788c072fac159cad5dc2b6bad6e9935b77ff5575f extends Twig_Template
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
