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
            <a href=\"/\"><img src=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/img/logo.png")), "html", null, true);
        echo "\" alt=\"\"></a>
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
                        <a href=\"/\"><img src=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/img/logo.png")), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-7\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 44
            echo "                                <li><a href=\"/drupal-9.4.7/product/category/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            <li><a href=\"./shop.html\">Shop</a></li>
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
        return array (  104 => 46,  93 => 44,  89 => 43,  79 => 36,  60 => 20,  39 => 1,);
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
            <a href=\"/\"><img src=\"{{ file_url( active_theme_path() ~ '/img/logo.png') }}\" alt=\"\"></a>
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
                        <a href=\"/\"><img src=\"{{ file_url( active_theme_path() ~ '/img/logo.png') }}\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-7\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                            {% for category in categories %}
                                <li><a href=\"/drupal-9.4.7/product/category/{{category.id}}\">{{category.name}}</a></li>
                            {% endfor %}
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
        static $tags = array("for" => 43);
        static $filters = array("escape" => 20);
        static $functions = array("file_url" => 20, "active_theme_path" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['file_url', 'active_theme_path']
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
