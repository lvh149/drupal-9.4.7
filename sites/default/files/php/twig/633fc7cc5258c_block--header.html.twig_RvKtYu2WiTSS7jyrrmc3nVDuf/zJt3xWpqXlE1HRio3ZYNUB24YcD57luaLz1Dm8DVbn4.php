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

/* themes/custom_theme/templates/block/block--header.html.twig */
class __TwigTemplate_20f19b0e656c181303efc63076d23aed8d06692cd216960832bd96df572d528d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"offcanvas__close\">+</div>
        <ul class=\"offcanvas__widget\">
            <li><span class=\"icon_search search-switch\"></span></li>
            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span>
                <div class=\"tip\">2</div>
            </a></li>
            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span>
                <div class=\"tip\">2</div>
            </a></li>
        </ul>
        <div class=\"offcanvas__logo\">
            <a href=\"./index.html\"><img src=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 20, $this->source)), "html", null, true);
        echo "/img/logo.png\" alt=\"\"></a>
        </div>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"offcanvas__auth\">
            <a href=\"#\">Login</a>
            <a href=\"#\">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class=\"header\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-2\">
                    <div class=\"header__logo\">
                        <a href=\"./index.html\"><img src=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 36, $this->source)), "html", null, true);
        echo "/img/logo.png\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-7\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"#\">Women’s</a></li>
                            <li><a href=\"#\">Men’s</a></li>
                            <li><a href=\"./shop.html\">Shop</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./product-details.html\">Product Details</a></li>
                                    <li><a href=\"./shop-cart.html\">Shop Cart</a></li>
                                    <li><a href=\"./checkout.html\">Checkout</a></li>
                                    <li><a href=\"./blog-details.html\">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./blog.html\">Blog</a></li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"header__right\">
                        <div class=\"header__right__auth\">
                            <a href=\"#\">Login</a>
                            <a href=\"#\">Register</a>
                        </div>
                        <ul class=\"header__right__widget\">
                            <li><span class=\"icon_search search-switch\"></span></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span>
                                <div class=\"tip\">2</div>
                            </a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span>
                                <div class=\"tip\">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"canvas__open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->";
    }

    public function getTemplateName()
    {
        return "themes/custom_theme/templates/block/block--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 36,  60 => 20,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"offcanvas__close\">+</div>
        <ul class=\"offcanvas__widget\">
            <li><span class=\"icon_search search-switch\"></span></li>
            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span>
                <div class=\"tip\">2</div>
            </a></li>
            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span>
                <div class=\"tip\">2</div>
            </a></li>
        </ul>
        <div class=\"offcanvas__logo\">
            <a href=\"./index.html\"><img src=\"{{ base_path ~ directory }}/img/logo.png\" alt=\"\"></a>
        </div>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"offcanvas__auth\">
            <a href=\"#\">Login</a>
            <a href=\"#\">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class=\"header\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-2\">
                    <div class=\"header__logo\">
                        <a href=\"./index.html\"><img src=\"{{ base_path ~ directory }}/img/logo.png\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-7\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"#\">Women’s</a></li>
                            <li><a href=\"#\">Men’s</a></li>
                            <li><a href=\"./shop.html\">Shop</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./product-details.html\">Product Details</a></li>
                                    <li><a href=\"./shop-cart.html\">Shop Cart</a></li>
                                    <li><a href=\"./checkout.html\">Checkout</a></li>
                                    <li><a href=\"./blog-details.html\">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./blog.html\">Blog</a></li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"header__right\">
                        <div class=\"header__right__auth\">
                            <a href=\"#\">Login</a>
                            <a href=\"#\">Register</a>
                        </div>
                        <ul class=\"header__right__widget\">
                            <li><span class=\"icon_search search-switch\"></span></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span>
                                <div class=\"tip\">2</div>
                            </a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span>
                                <div class=\"tip\">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"canvas__open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->", "themes/custom_theme/templates/block/block--header.html.twig", "C:\\xampp\\htdocs\\drupal-9.4.7\\themes\\custom_theme\\templates\\block\\block--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
