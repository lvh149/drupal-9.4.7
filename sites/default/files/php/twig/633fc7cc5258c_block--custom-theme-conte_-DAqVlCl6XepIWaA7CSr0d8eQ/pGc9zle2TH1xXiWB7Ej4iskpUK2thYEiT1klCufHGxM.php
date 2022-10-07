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

/* themes/custom_theme/templates/block/block--custom-theme-content.html.twig */
class __TwigTemplate_1ced08609d4d8e30000a5e5e950bca3e234ec4bfe98926294241a1d8b9f464bd extends \Twig\Template
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
        echo "<!-- Categories Section Begin -->
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("custom_theme/common"), "html", null, true);
        echo "
    <section class=\"categories\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 p-0\">
                    <div class=\"categories__item categories__large__item set-bg\"
                    data-setbg=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/img/categories/category-1.jpg\">
                    <div class=\"categories__text\">
                        <h1>Women’s fashion</h1>
                        <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                        edolore magna aliquapendisse ultrices gravida.</p>
                        <a href=\"#\">Shop now</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 p-0\">
                        <div class=\"categories__item set-bg\" data-setbg=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 20, $this->source)), "html", null, true);
        echo "/img/categories/category-2.jpg\">
                            <div class=\"categories__text\">
                                <h4>Men’s fashion</h4>
                                <p>358 items</p>
                                <a href=\"#\">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 p-0\">
                        <div class=\"categories__item set-bg\" data-setbg=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 29, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 29, $this->source)), "html", null, true);
        echo "/img/categories/category-3.jpg\">
                            <div class=\"categories__text\">
                                <h4>Kid’s fashion</h4>
                                <p>273 items</p>
                                <a href=\"#\">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 p-0\">
                        <div class=\"categories__item set-bg\" data-setbg=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 38, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 38, $this->source)), "html", null, true);
        echo "/img/categories/category-4.jpg\">
                            <div class=\"categories__text\">
                                <h4>Cosmetics</h4>
                                <p>159 items</p>
                                <a href=\"#\">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 p-0\">
                        <div class=\"categories__item set-bg\" data-setbg=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 47, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 47, $this->source)), "html", null, true);
        echo "/img/categories/category-5.jpg\">
                            <div class=\"categories__text\">
                                <h4>Accessories</h4>
                                <p>792 items</p>
                                <a href=\"#\">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class=\"product spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"section-title\">
                    <h4>New product</h4>
                </div>
            </div>
            <div class=\"col-lg-8 col-md-8\">
                <ul class=\"filter__controls\">
                    <li class=\"active\" data-filter=\"*\">All</li>
                    <li data-filter=\".women\">Women’s</li>
                    <li data-filter=\".men\">Men’s</li>
                    <li data-filter=\".kid\">Kid’s</li>
                    <li data-filter=\".accessories\">Accessories</li>
                    <li data-filter=\".cosmetic\">Cosmetics</li>
                </ul>
            </div>
        </div>
        <div class=\"row property__gallery\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix women\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 85, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 85, $this->source)), "html", null, true);
        echo "/img/product/product-1.jpg\">
                        <div class=\"label new\">New</div>
                        <ul class=\"product__hover\">
                            <li><a href=\"";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 88, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 88, $this->source)), "html", null, true);
        echo "/img/product/product-1.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Buttons tweed blazer</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix men\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 108, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 108, $this->source)), "html", null, true);
        echo "/img/product/product-2.jpg\">
                        <ul class=\"product__hover\">
                            <li><a href=\"";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 110, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 110, $this->source)), "html", null, true);
        echo "/img/product/product-2.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Flowy striped skirt</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 49.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix accessories\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 130, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 130, $this->source)), "html", null, true);
        echo "/img/product/product-3.jpg\">
                        <div class=\"label stockout\">out of stock</div>
                        <ul class=\"product__hover\">
                            <li><a href=\"";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 133, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 133, $this->source)), "html", null, true);
        echo "/img/product/product-3.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Cotton T-Shirt</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix cosmetic\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 153, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 153, $this->source)), "html", null, true);
        echo "/img/product/product-4.jpg\">
                        <ul class=\"product__hover\">
                            <li><a href=\"";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 155, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 155, $this->source)), "html", null, true);
        echo "/img/product/product-4.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Slim striped pocket shirt</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix kid\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 175, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 175, $this->source)), "html", null, true);
        echo "/img/product/product-5.jpg\">
                        <ul class=\"product__hover\">
                            <li><a href=\"";
        // line 177
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 177, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 177, $this->source)), "html", null, true);
        echo "/img/product/product-5.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Fit micro corduroy shirt</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic\">
                <div class=\"product__item sale\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"";
        // line 197
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 197, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 197, $this->source)), "html", null, true);
        echo "/img/product/product-6.jpg\">
                        <div class=\"label sale\">Sale</div>
                        <ul class=\"product__hover\">
                            <li><a href=\"";
        // line 200
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 200, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 200, $this->source)), "html", null, true);
        echo "/img/product/product-6.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Tropical Kimono</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 49.0 <span>\$ 59.0</span></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"";
        // line 220
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 220, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 220, $this->source)), "html", null, true);
        echo "/img/product/product-7.jpg\">
                        <ul class=\"product__hover\">
                            <li><a href=\"";
        // line 222
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 222, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 222, $this->source)), "html", null, true);
        echo "/img/product/product-7.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Contrasting sunglasses</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic\">
                <div class=\"product__item sale\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"";
        // line 242
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 242, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 242, $this->source)), "html", null, true);
        echo "/img/product/product-8.jpg\">
                        <div class=\"label\">Sale</div>
                        <ul class=\"product__hover\">
                            <li><a href=\"";
        // line 245
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 245, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 245, $this->source)), "html", null, true);
        echo "/img/product/product-8.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Water resistant backpack</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 49.0 <span>\$ 59.0</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class=\"banner set-bg\" data-setbg=\"";
        // line 269
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 269, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 269, $this->source)), "html", null, true);
        echo "/img/banner/banner-1.jpg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-7 col-lg-8 m-auto\">
                <div class=\"banner__slider owl-carousel\">
                    <div class=\"banner__item\">
                        <div class=\"banner__text\">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href=\"#\">Shop now</a>
                        </div>
                    </div>
                    <div class=\"banner__item\">
                        <div class=\"banner__text\">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href=\"#\">Shop now</a>
                        </div>
                    </div>
                    <div class=\"banner__item\">
                        <div class=\"banner__text\">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href=\"#\">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Trend Section Begin -->
<section class=\"trend spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-6\">
                <div class=\"trend__content\">
                    <div class=\"section-title\">
                        <h4>Hot Trend</h4>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 313
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 313, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 313, $this->source)), "html", null, true);
        echo "/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 313, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 313, $this->source)), "html", null, true);
        echo "/img/trend/ht-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Chain bucket bag</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 329
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 329, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 329, $this->source)), "html", null, true);
        echo "/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 329, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 329, $this->source)), "html", null, true);
        echo "/img/trend/ht-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Pendant earrings</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 345
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 345, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 345, $this->source)), "html", null, true);
        echo "/img/trend/ht-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Cotton T-Shirt</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6\">
                <div class=\"trend__content\">
                    <div class=\"section-title\">
                        <h4>Best seller</h4>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 368
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 368, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 368, $this->source)), "html", null, true);
        echo "/img/trend/bs-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Cotton T-Shirt</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 384
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 384, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 384, $this->source)), "html", null, true);
        echo "/img/trend/bs-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Zip-pockets pebbled tote <br />briefcase</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 400
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 400, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 400, $this->source)), "html", null, true);
        echo "/img/trend/bs-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Round leather bag</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6\">
                <div class=\"trend__content\">
                    <div class=\"section-title\">
                        <h4>Feature</h4>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 423
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 423, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 423, $this->source)), "html", null, true);
        echo "/img/trend/f-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Bow wrap skirt</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 439
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 439, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 439, $this->source)), "html", null, true);
        echo "/img/trend/f-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Metallic earrings</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"";
        // line 455
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 455, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 455, $this->source)), "html", null, true);
        echo "/img/trend/f-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Flap cross-body bag</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<section class=\"discount\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 p-0\">
                <div class=\"discount__pic\">
                    <img src=\"";
        // line 482
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 482, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 482, $this->source)), "html", null, true);
        echo "/img/discount.jpg\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-6 p-0\">
                <div class=\"discount__text\">
                    <div class=\"discount__text__title\">
                        <span>Discount</span>
                        <h2>Summer 2019</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class=\"discount__countdown\" id=\"countdown-time\">
                        <div class=\"countdown__item\">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <a href=\"#\">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class=\"services spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                <div class=\"services__item\">
                    <i class=\"fa fa-car\"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over \$99</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                <div class=\"services__item\">
                    <i class=\"fa fa-money\"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                <div class=\"services__item\">
                    <i class=\"fa fa-support\"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                <div class=\"services__item\">
                    <i class=\"fa fa-headphones\"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<div class=\"instagram\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"";
        // line 560
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 560, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 560, $this->source)), "html", null, true);
        echo "/img/instagram/insta-1.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"";
        // line 568
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 568, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 568, $this->source)), "html", null, true);
        echo "/img/instagram/insta-2.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"";
        // line 576
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 576, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 576, $this->source)), "html", null, true);
        echo "/img/instagram/insta-3.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"";
        // line 584
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 584, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 584, $this->source)), "html", null, true);
        echo "/img/instagram/insta-4.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"";
        // line 592
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 592, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 592, $this->source)), "html", null, true);
        echo "/img/instagram/insta-5.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"";
        // line 600
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 600, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 600, $this->source)), "html", null, true);
        echo "/img/instagram/insta-6.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->";
    }

    public function getTemplateName()
    {
        return "themes/custom_theme/templates/block/block--custom-theme-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  758 => 600,  747 => 592,  736 => 584,  725 => 576,  714 => 568,  703 => 560,  622 => 482,  592 => 455,  573 => 439,  554 => 423,  528 => 400,  509 => 384,  490 => 368,  464 => 345,  443 => 329,  422 => 313,  375 => 269,  348 => 245,  342 => 242,  319 => 222,  314 => 220,  291 => 200,  285 => 197,  262 => 177,  257 => 175,  234 => 155,  229 => 153,  206 => 133,  200 => 130,  177 => 110,  172 => 108,  149 => 88,  143 => 85,  102 => 47,  90 => 38,  78 => 29,  66 => 20,  51 => 8,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Categories Section Begin -->
{{ attach_library('custom_theme/common') }}
    <section class=\"categories\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 p-0\">
                    <div class=\"categories__item categories__large__item set-bg\"
                    data-setbg=\"{{ base_path ~ directory }}/img/categories/category-1.jpg\">
                    <div class=\"categories__text\">
                        <h1>Women’s fashion</h1>
                        <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                        edolore magna aliquapendisse ultrices gravida.</p>
                        <a href=\"#\">Shop now</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 p-0\">
                        <div class=\"categories__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/categories/category-2.jpg\">
                            <div class=\"categories__text\">
                                <h4>Men’s fashion</h4>
                                <p>358 items</p>
                                <a href=\"#\">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 p-0\">
                        <div class=\"categories__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/categories/category-3.jpg\">
                            <div class=\"categories__text\">
                                <h4>Kid’s fashion</h4>
                                <p>273 items</p>
                                <a href=\"#\">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 p-0\">
                        <div class=\"categories__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/categories/category-4.jpg\">
                            <div class=\"categories__text\">
                                <h4>Cosmetics</h4>
                                <p>159 items</p>
                                <a href=\"#\">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 p-0\">
                        <div class=\"categories__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/categories/category-5.jpg\">
                            <div class=\"categories__text\">
                                <h4>Accessories</h4>
                                <p>792 items</p>
                                <a href=\"#\">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class=\"product spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"section-title\">
                    <h4>New product</h4>
                </div>
            </div>
            <div class=\"col-lg-8 col-md-8\">
                <ul class=\"filter__controls\">
                    <li class=\"active\" data-filter=\"*\">All</li>
                    <li data-filter=\".women\">Women’s</li>
                    <li data-filter=\".men\">Men’s</li>
                    <li data-filter=\".kid\">Kid’s</li>
                    <li data-filter=\".accessories\">Accessories</li>
                    <li data-filter=\".cosmetic\">Cosmetics</li>
                </ul>
            </div>
        </div>
        <div class=\"row property__gallery\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix women\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/product/product-1.jpg\">
                        <div class=\"label new\">New</div>
                        <ul class=\"product__hover\">
                            <li><a href=\"{{ base_path ~ directory }}/img/product/product-1.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Buttons tweed blazer</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix men\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/product/product-2.jpg\">
                        <ul class=\"product__hover\">
                            <li><a href=\"{{ base_path ~ directory }}/img/product/product-2.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Flowy striped skirt</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 49.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix accessories\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/product/product-3.jpg\">
                        <div class=\"label stockout\">out of stock</div>
                        <ul class=\"product__hover\">
                            <li><a href=\"{{ base_path ~ directory }}/img/product/product-3.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Cotton T-Shirt</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix cosmetic\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/product/product-4.jpg\">
                        <ul class=\"product__hover\">
                            <li><a href=\"{{ base_path ~ directory }}/img/product/product-4.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Slim striped pocket shirt</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix kid\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/product/product-5.jpg\">
                        <ul class=\"product__hover\">
                            <li><a href=\"{{ base_path ~ directory }}/img/product/product-5.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Fit micro corduroy shirt</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic\">
                <div class=\"product__item sale\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/product/product-6.jpg\">
                        <div class=\"label sale\">Sale</div>
                        <ul class=\"product__hover\">
                            <li><a href=\"{{ base_path ~ directory }}/img/product/product-6.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Tropical Kimono</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 49.0 <span>\$ 59.0</span></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/product/product-7.jpg\">
                        <ul class=\"product__hover\">
                            <li><a href=\"{{ base_path ~ directory }}/img/product/product-7.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Contrasting sunglasses</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic\">
                <div class=\"product__item sale\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/product/product-8.jpg\">
                        <div class=\"label\">Sale</div>
                        <ul class=\"product__hover\">
                            <li><a href=\"{{ base_path ~ directory }}/img/product/product-8.jpg\" class=\"image-popup\"><span class=\"arrow_expand\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                            <li><a href=\"#\"><span class=\"icon_bag_alt\"></span></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6><a href=\"#\">Water resistant backpack</a></h6>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <div class=\"product__price\">\$ 49.0 <span>\$ 59.0</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class=\"banner set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/banner/banner-1.jpg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-7 col-lg-8 m-auto\">
                <div class=\"banner__slider owl-carousel\">
                    <div class=\"banner__item\">
                        <div class=\"banner__text\">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href=\"#\">Shop now</a>
                        </div>
                    </div>
                    <div class=\"banner__item\">
                        <div class=\"banner__text\">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href=\"#\">Shop now</a>
                        </div>
                    </div>
                    <div class=\"banner__item\">
                        <div class=\"banner__text\">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href=\"#\">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Trend Section Begin -->
<section class=\"trend spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-6\">
                <div class=\"trend__content\">
                    <div class=\"section-title\">
                        <h4>Hot Trend</h4>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/{{ base_path ~ directory }}/img/trend/ht-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Chain bucket bag</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/{{ base_path ~ directory }}/img/trend/ht-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Pendant earrings</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/img/trend/ht-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Cotton T-Shirt</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6\">
                <div class=\"trend__content\">
                    <div class=\"section-title\">
                        <h4>Best seller</h4>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/img/trend/bs-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Cotton T-Shirt</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/img/trend/bs-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Zip-pockets pebbled tote <br />briefcase</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/img/trend/bs-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Round leather bag</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6\">
                <div class=\"trend__content\">
                    <div class=\"section-title\">
                        <h4>Feature</h4>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/img/trend/f-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Bow wrap skirt</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/img/trend/f-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Metallic earrings</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                    <div class=\"trend__item\">
                        <div class=\"trend__item__pic\">
                            <img src=\"{{ base_path ~ directory }}/img/trend/f-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"trend__item__text\">
                            <h6>Flap cross-body bag</h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product__price\">\$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<section class=\"discount\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 p-0\">
                <div class=\"discount__pic\">
                    <img src=\"{{ base_path ~ directory }}/img/discount.jpg\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-6 p-0\">
                <div class=\"discount__text\">
                    <div class=\"discount__text__title\">
                        <span>Discount</span>
                        <h2>Summer 2019</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class=\"discount__countdown\" id=\"countdown-time\">
                        <div class=\"countdown__item\">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class=\"countdown__item\">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <a href=\"#\">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class=\"services spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                <div class=\"services__item\">
                    <i class=\"fa fa-car\"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over \$99</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                <div class=\"services__item\">
                    <i class=\"fa fa-money\"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                <div class=\"services__item\">
                    <i class=\"fa fa-support\"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                <div class=\"services__item\">
                    <i class=\"fa fa-headphones\"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<div class=\"instagram\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/instagram/insta-1.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/instagram/insta-2.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/instagram/insta-3.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/instagram/insta-4.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/instagram/insta-5.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 col-sm-4 p-0\">
                <div class=\"instagram__item set-bg\" data-setbg=\"{{ base_path ~ directory }}/img/instagram/insta-6.jpg\">
                    <div class=\"instagram__text\">
                        <i class=\"fa fa-instagram\"></i>
                        <a href=\"#\">@ ashion_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->", "themes/custom_theme/templates/block/block--custom-theme-content.html.twig", "C:\\xampp\\htdocs\\drupal-9.4.7\\themes\\custom_theme\\templates\\block\\block--custom-theme-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
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
