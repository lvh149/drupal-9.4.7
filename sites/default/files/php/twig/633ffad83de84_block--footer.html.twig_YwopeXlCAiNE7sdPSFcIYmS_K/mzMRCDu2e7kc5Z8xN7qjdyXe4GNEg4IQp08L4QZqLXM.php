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

/* themes/custom_theme/templates/block/block--footer.html.twig */
class __TwigTemplate_da2befd2ea85ca2e33d4c1e5f8705ace6b77f9e28ae534327c4c0612714eeb50 extends \Twig\Template
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
        echo "<!-- Footer Section Begin -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-7\">
                <div class=\"footer__about\">
                    <div class=\"footer__logo\">
                        <a href=\"./index.html\"><img src=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/img/logo.png\" alt=\"\"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    cilisis.</p>
                    <div class=\"footer__payment\">
                        <a href=\"#\"><img src=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 13, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 13, $this->source)), "html", null, true);
        echo "/img/payment/payment-1.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 14, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 14, $this->source)), "html", null, true);
        echo "/img/payment/payment-2.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 15, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 15, $this->source)), "html", null, true);
        echo "/img/payment/payment-3.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 16, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 16, $this->source)), "html", null, true);
        echo "/img/payment/payment-4.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 17, $this->source)), "html", null, true);
        echo "/img/payment/payment-5.png\" alt=\"\"></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-5\">
                <div class=\"footer__widget\">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href=\"#\">About</a></li>
                        <li><a href=\"#\">Blogs</a></li>
                        <li><a href=\"#\">Contact</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-4\">
                <div class=\"footer__widget\">
                    <h6>Account</h6>
                    <ul>
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Orders Tracking</a></li>
                        <li><a href=\"#\">Checkout</a></li>
                        <li><a href=\"#\">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-8 col-sm-8\">
                <div class=\"footer__newslatter\">
                    <h6>NEWSLETTER</h6>
                    <form action=\"#\">
                        <input type=\"text\" placeholder=\"Email\">
                        <button type=\"submit\" class=\"site-btn\">Subscribe</button>
                    </form>
                    <div class=\"footer__social\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class=\"footer__copyright__text\">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->";
    }

    public function getTemplateName()
    {
        return "themes/custom_theme/templates/block/block--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer Section Begin -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-7\">
                <div class=\"footer__about\">
                    <div class=\"footer__logo\">
                        <a href=\"./index.html\"><img src=\"{{ base_path ~ directory }}/img/logo.png\" alt=\"\"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    cilisis.</p>
                    <div class=\"footer__payment\">
                        <a href=\"#\"><img src=\"{{ base_path ~ directory }}/img/payment/payment-1.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"{{ base_path ~ directory }}/img/payment/payment-2.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"{{ base_path ~ directory }}/img/payment/payment-3.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"{{ base_path ~ directory }}/img/payment/payment-4.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"{{ base_path ~ directory }}/img/payment/payment-5.png\" alt=\"\"></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-5\">
                <div class=\"footer__widget\">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href=\"#\">About</a></li>
                        <li><a href=\"#\">Blogs</a></li>
                        <li><a href=\"#\">Contact</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-4\">
                <div class=\"footer__widget\">
                    <h6>Account</h6>
                    <ul>
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Orders Tracking</a></li>
                        <li><a href=\"#\">Checkout</a></li>
                        <li><a href=\"#\">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-8 col-sm-8\">
                <div class=\"footer__newslatter\">
                    <h6>NEWSLETTER</h6>
                    <form action=\"#\">
                        <input type=\"text\" placeholder=\"Email\">
                        <button type=\"submit\" class=\"site-btn\">Subscribe</button>
                    </form>
                    <div class=\"footer__social\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class=\"footer__copyright__text\">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->", "themes/custom_theme/templates/block/block--footer.html.twig", "C:\\xampp\\htdocs\\drupal-9.4.7\\themes\\custom_theme\\templates\\block\\block--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 8);
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
