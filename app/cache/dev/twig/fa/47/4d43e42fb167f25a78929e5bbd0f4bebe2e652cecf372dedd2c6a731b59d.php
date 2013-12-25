<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_fa474d43e42fb167f25a78929e5bbd0f4bebe2e652cecf372dedd2c6a731b59d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  110 => 22,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1322 => 382,  1319 => 381,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  876 => 218,  860 => 211,  857 => 210,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  825 => 196,  817 => 192,  814 => 191,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  366 => 33,  350 => 26,  342 => 23,  335 => 21,  332 => 20,  316 => 16,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  271 => 374,  266 => 366,  253 => 342,  250 => 341,  215 => 280,  191 => 246,  146 => 181,  134 => 161,  124 => 132,  84 => 29,  76 => 28,  1407 => 493,  1403 => 491,  1400 => 490,  1398 => 489,  1396 => 488,  1393 => 487,  1383 => 481,  1380 => 480,  1363 => 477,  1360 => 476,  1357 => 475,  1354 => 474,  1348 => 472,  1345 => 471,  1342 => 470,  1336 => 468,  1330 => 466,  1327 => 465,  1324 => 383,  1308 => 461,  1305 => 460,  1302 => 459,  1299 => 458,  1296 => 377,  1293 => 456,  1290 => 455,  1287 => 454,  1284 => 453,  1281 => 452,  1278 => 451,  1275 => 450,  1272 => 449,  1270 => 448,  1268 => 447,  1265 => 446,  1258 => 439,  1252 => 437,  1246 => 435,  1244 => 366,  1242 => 433,  1239 => 432,  1230 => 422,  1223 => 420,  1220 => 416,  1216 => 354,  1210 => 413,  1207 => 412,  1192 => 410,  1189 => 409,  1185 => 342,  1182 => 407,  1164 => 406,  1156 => 403,  1153 => 396,  1148 => 395,  1145 => 394,  1143 => 322,  1141 => 321,  1139 => 391,  1136 => 390,  1129 => 385,  1120 => 383,  1116 => 382,  1113 => 381,  1110 => 380,  1108 => 379,  1105 => 378,  1095 => 312,  1093 => 371,  1091 => 369,  1088 => 308,  1078 => 364,  1072 => 362,  1070 => 361,  1067 => 299,  1059 => 355,  1048 => 290,  1046 => 352,  1026 => 351,  1023 => 350,  1014 => 272,  1011 => 344,  1008 => 343,  1005 => 342,  1003 => 341,  1000 => 340,  991 => 335,  988 => 334,  985 => 333,  982 => 261,  980 => 331,  977 => 330,  968 => 326,  960 => 324,  958 => 253,  956 => 322,  953 => 321,  946 => 315,  941 => 314,  939 => 243,  936 => 242,  929 => 306,  925 => 305,  919 => 303,  917 => 302,  909 => 301,  904 => 300,  901 => 299,  899 => 298,  896 => 297,  887 => 293,  884 => 292,  880 => 290,  878 => 219,  873 => 217,  865 => 213,  862 => 212,  859 => 284,  854 => 283,  852 => 282,  849 => 206,  834 => 274,  831 => 273,  828 => 197,  815 => 268,  812 => 190,  809 => 189,  802 => 263,  799 => 262,  791 => 256,  785 => 178,  782 => 253,  776 => 251,  773 => 250,  767 => 170,  764 => 169,  758 => 245,  756 => 165,  752 => 243,  748 => 242,  732 => 241,  729 => 155,  726 => 239,  723 => 238,  720 => 237,  717 => 236,  714 => 235,  711 => 234,  708 => 233,  706 => 232,  704 => 231,  701 => 230,  692 => 225,  690 => 224,  685 => 223,  682 => 222,  679 => 221,  676 => 220,  674 => 219,  671 => 218,  663 => 212,  660 => 211,  658 => 124,  655 => 209,  647 => 205,  644 => 204,  642 => 203,  639 => 202,  630 => 196,  626 => 195,  622 => 194,  618 => 193,  613 => 192,  610 => 191,  604 => 189,  601 => 188,  599 => 187,  596 => 106,  588 => 181,  585 => 180,  575 => 179,  570 => 178,  567 => 177,  561 => 175,  558 => 174,  556 => 173,  553 => 172,  545 => 167,  542 => 166,  540 => 165,  539 => 164,  538 => 163,  537 => 162,  534 => 161,  531 => 160,  528 => 159,  525 => 158,  518 => 155,  508 => 148,  502 => 145,  498 => 144,  494 => 142,  488 => 140,  486 => 139,  477 => 138,  468 => 135,  466 => 134,  455 => 133,  452 => 132,  450 => 64,  448 => 130,  445 => 129,  434 => 122,  431 => 121,  428 => 59,  422 => 118,  420 => 117,  415 => 116,  412 => 115,  410 => 114,  395 => 113,  377 => 37,  369 => 102,  361 => 99,  352 => 96,  330 => 89,  320 => 87,  304 => 83,  301 => 82,  280 => 73,  256 => 70,  251 => 69,  248 => 336,  245 => 335,  242 => 66,  218 => 54,  213 => 53,  184 => 233,  181 => 232,  114 => 111,  58 => 17,  34 => 14,  210 => 270,  207 => 269,  198 => 39,  148 => 28,  118 => 20,  100 => 15,  65 => 9,  506 => 187,  391 => 165,  388 => 42,  373 => 149,  370 => 148,  367 => 147,  358 => 138,  356 => 136,  346 => 132,  343 => 93,  333 => 90,  329 => 135,  326 => 134,  321 => 130,  318 => 86,  315 => 126,  303 => 118,  284 => 112,  281 => 388,  277 => 109,  274 => 108,  260 => 363,  255 => 353,  237 => 64,  216 => 21,  211 => 52,  206 => 110,  200 => 94,  197 => 249,  194 => 248,  186 => 239,  174 => 217,  165 => 36,  153 => 74,  150 => 34,  129 => 148,  126 => 147,  77 => 23,  70 => 36,  53 => 11,  408 => 50,  404 => 103,  401 => 102,  399 => 98,  396 => 185,  390 => 43,  385 => 41,  382 => 91,  376 => 89,  371 => 35,  363 => 32,  353 => 135,  349 => 95,  347 => 77,  344 => 24,  336 => 91,  334 => 75,  331 => 74,  328 => 73,  324 => 131,  317 => 67,  313 => 15,  310 => 85,  307 => 122,  295 => 80,  292 => 58,  289 => 76,  279 => 54,  276 => 381,  263 => 365,  259 => 96,  257 => 95,  249 => 90,  244 => 73,  239 => 63,  236 => 62,  233 => 304,  231 => 56,  228 => 55,  225 => 298,  222 => 297,  212 => 279,  202 => 266,  188 => 37,  180 => 34,  167 => 32,  161 => 202,  152 => 20,  127 => 60,  104 => 90,  97 => 41,  113 => 43,  81 => 40,  480 => 75,  474 => 137,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 111,  384 => 121,  381 => 108,  379 => 107,  374 => 36,  368 => 34,  365 => 145,  362 => 110,  360 => 77,  355 => 27,  341 => 92,  337 => 22,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 81,  294 => 90,  285 => 3,  283 => 56,  278 => 387,  268 => 373,  264 => 84,  258 => 354,  252 => 101,  247 => 78,  241 => 72,  229 => 60,  220 => 290,  214 => 69,  177 => 82,  169 => 210,  140 => 55,  132 => 28,  128 => 49,  107 => 16,  61 => 12,  273 => 380,  269 => 94,  254 => 94,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 58,  221 => 77,  219 => 45,  217 => 289,  208 => 68,  204 => 267,  179 => 224,  159 => 196,  143 => 56,  135 => 62,  119 => 117,  102 => 17,  71 => 10,  67 => 7,  63 => 19,  59 => 13,  38 => 6,  94 => 34,  89 => 41,  85 => 32,  75 => 17,  68 => 14,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 11,  88 => 31,  78 => 26,  46 => 8,  27 => 1,  44 => 7,  31 => 3,  28 => 3,  201 => 40,  196 => 47,  183 => 35,  171 => 216,  166 => 209,  163 => 35,  158 => 79,  156 => 195,  151 => 188,  142 => 26,  138 => 30,  136 => 168,  121 => 131,  117 => 19,  105 => 18,  91 => 56,  62 => 39,  49 => 13,  24 => 3,  25 => 35,  19 => 1,  79 => 32,  72 => 46,  69 => 13,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 97,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 19,  111 => 110,  108 => 19,  101 => 43,  98 => 33,  96 => 67,  83 => 32,  74 => 27,  66 => 7,  55 => 11,  52 => 14,  50 => 3,  43 => 11,  41 => 10,  35 => 5,  32 => 5,  29 => 3,  209 => 111,  203 => 96,  199 => 265,  193 => 38,  189 => 240,  187 => 84,  182 => 66,  176 => 223,  173 => 34,  168 => 37,  164 => 203,  162 => 77,  154 => 189,  149 => 182,  147 => 33,  144 => 176,  141 => 175,  133 => 23,  130 => 27,  125 => 26,  122 => 25,  116 => 116,  112 => 18,  109 => 105,  106 => 45,  103 => 32,  99 => 68,  95 => 16,  92 => 5,  86 => 34,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 8,  51 => 18,  48 => 9,  45 => 8,  42 => 7,  39 => 19,  36 => 5,  33 => 4,  30 => 3,);
    }
}
