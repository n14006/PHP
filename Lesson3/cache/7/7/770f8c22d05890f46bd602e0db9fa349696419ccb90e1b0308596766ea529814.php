<?php

/* output.tpl */
class __TwigTemplate_770f8c22d05890f46bd602e0db9fa349696419ccb90e1b0308596766ea529814 extends Twig_Template
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
<title>ロバのみみblog 表示画面</title>
</head>
<body>
<h1>ロバのみみblog 表示画面</h1>
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
        return array (  36 => 13,  30 => 10,  19 => 1,);
    }
}
