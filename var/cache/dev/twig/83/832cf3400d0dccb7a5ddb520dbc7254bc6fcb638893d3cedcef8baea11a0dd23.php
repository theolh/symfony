<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* article/show.html.twig */
class __TwigTemplate_6ad8e7dbe36421aa4b7edccd5f422db79142ed4b843e21654c50531f07bf1a7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('../img/post-bg.jpg')\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"post-heading\">
                        <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                        <h2 class=\"subheading\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "subTitle", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
                        <span class=\"meta\">Posted by
                  <a href=\"#\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "author", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
                  on ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "createdAt", [], "any", false, false, false, 17), "F m, Y"), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    <!-- Post Content -->
    <article>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "body", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>

                    <a href=\"#\">
                        <img class=\"img-fluid\" src= ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35), "html", null, true);
        echo " alt=\"\">
                    </a>
                </div>
            </div>
        </div>
    </article>

    <hr>

        <hr>

        <div class=\"container\">
            <div class=\"row\">
                <h3 class=\"col-lg-8 col-md-10 mx-auto\">";
        // line 48
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 48, $this->source); })()), "comments", [], "any", false, false, false, 48)), "html", null, true);
        echo "Comments</h3>
            </div>

            <!-- Comments Form -->
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"card my-4\">
                    <h5 class=\"card-header\">Leave a Comment:</h5>
                    <div class=\"card-body\">
                        <form>
                            <div class=\"form-group\">
                                <label for=\"name\">Name</label>
                                <input id=\"name\" class=\"form-control form-control-sm\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input id=\"email\" class=\"form-control form-control-sm\" type=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"comment\">Comment</label>
                                <textarea id=\"comment\" class=\"form-control form-control-sm\" rows=\"3\"></textarea>
                            </div>
                            <button type=\"submit\" class=\"btn btn-secondary\">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 74, $this->source); })()), "comments", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 75
            echo "            <div class=\"row\">
                <div class=\"media mb-4 mt-4 col-lg-8 col-md-10 mx-auto\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 78), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 78), "F m, Y"), "html", null, true);
            echo "</small></h5>
                        <blockquote>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 79), "html", null, true);
            echo "</blockquote>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 84,  224 => 79,  218 => 78,  213 => 75,  209 => 74,  180 => 48,  164 => 35,  158 => 32,  150 => 26,  140 => 25,  123 => 17,  119 => 16,  114 => 14,  110 => 13,  101 => 6,  91 => 5,  80 => 86,  78 => 25,  75 => 24,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% block header %}
    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('../img/post-bg.jpg')\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"post-heading\">
                        <h1>{{ article.title }}</h1>
                        <h2 class=\"subheading\">{{ article.subTitle }}</h2>
                        <span class=\"meta\">Posted by
                  <a href=\"#\">{{ article.author }}</a>
                  on {{ article.createdAt|date(\"F m, Y\") }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {% endblock %}

    {% block content %}

    <!-- Post Content -->
    <article>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <p>{{ article.body }}</p>

                    <a href=\"#\">
                        <img class=\"img-fluid\" src= {{article.image}} alt=\"\">
                    </a>
                </div>
            </div>
        </div>
    </article>

    <hr>

        <hr>

        <div class=\"container\">
            <div class=\"row\">
                <h3 class=\"col-lg-8 col-md-10 mx-auto\">{{ article.comments | length }}Comments</h3>
            </div>

            <!-- Comments Form -->
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"card my-4\">
                    <h5 class=\"card-header\">Leave a Comment:</h5>
                    <div class=\"card-body\">
                        <form>
                            <div class=\"form-group\">
                                <label for=\"name\">Name</label>
                                <input id=\"name\" class=\"form-control form-control-sm\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input id=\"email\" class=\"form-control form-control-sm\" type=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"comment\">Comment</label>
                                <textarea id=\"comment\" class=\"form-control form-control-sm\" rows=\"3\"></textarea>
                            </div>
                            <button type=\"submit\" class=\"btn btn-secondary\">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            {% for comment in article.comments %}
            <div class=\"row\">
                <div class=\"media mb-4 mt-4 col-lg-8 col-md-10 mx-auto\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0\">{{comment.name}} <small>{{ comment.createdAt|date(\"F m, Y\") }}</small></h5>
                        <blockquote>{{ comment.comment }}</blockquote>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    {% endblock %}

{% endblock %}
", "article/show.html.twig", "C:\\Users\\Théo\\Documents\\LE4\\symfony\\TP2\\skeleton\\templates\\article\\show.html.twig");
    }
}
