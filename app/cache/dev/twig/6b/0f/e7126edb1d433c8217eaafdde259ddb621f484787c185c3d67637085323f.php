<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_6b0fe7126edb1d433c8217eaafdde259ddb621f484787c185c3d67637085323f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  810 => 492,  807 => 491,  792 => 488,  788 => 486,  775 => 485,  727 => 476,  702 => 472,  698 => 471,  686 => 468,  677 => 465,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  549 => 411,  532 => 410,  522 => 406,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  345 => 147,  340 => 145,  302 => 125,  296 => 121,  232 => 88,  170 => 84,  155 => 47,  357 => 123,  327 => 114,  306 => 286,  297 => 104,  291 => 102,  265 => 105,  190 => 76,  175 => 58,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  429 => 188,  394 => 168,  380 => 158,  351 => 120,  348 => 140,  338 => 135,  325 => 129,  323 => 128,  300 => 105,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  226 => 84,  185 => 74,  178 => 59,  172 => 57,  90 => 37,  110 => 38,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1322 => 382,  1319 => 381,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  876 => 218,  860 => 211,  857 => 210,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  825 => 196,  817 => 192,  814 => 191,  801 => 185,  798 => 184,  796 => 489,  793 => 182,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  753 => 164,  751 => 163,  749 => 479,  746 => 478,  739 => 156,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 475,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 470,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  649 => 462,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 409,  527 => 408,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  366 => 33,  350 => 327,  342 => 137,  335 => 134,  332 => 116,  316 => 16,  311 => 14,  308 => 287,  299 => 8,  293 => 120,  290 => 119,  288 => 118,  271 => 374,  266 => 366,  253 => 100,  250 => 341,  215 => 280,  191 => 67,  146 => 181,  134 => 39,  124 => 132,  84 => 27,  76 => 28,  1407 => 493,  1403 => 491,  1400 => 490,  1398 => 489,  1396 => 488,  1393 => 487,  1383 => 481,  1380 => 480,  1363 => 477,  1360 => 476,  1357 => 475,  1354 => 474,  1348 => 472,  1345 => 471,  1342 => 470,  1336 => 468,  1330 => 466,  1327 => 465,  1324 => 383,  1308 => 461,  1305 => 460,  1302 => 459,  1299 => 458,  1296 => 377,  1293 => 456,  1290 => 455,  1287 => 454,  1284 => 453,  1281 => 452,  1278 => 451,  1275 => 450,  1272 => 449,  1270 => 448,  1268 => 447,  1265 => 446,  1258 => 439,  1252 => 437,  1246 => 435,  1244 => 366,  1242 => 433,  1239 => 432,  1230 => 422,  1223 => 420,  1220 => 416,  1216 => 354,  1210 => 413,  1207 => 412,  1192 => 410,  1189 => 409,  1185 => 342,  1182 => 407,  1164 => 406,  1156 => 403,  1153 => 396,  1148 => 395,  1145 => 394,  1143 => 322,  1141 => 321,  1139 => 391,  1136 => 390,  1129 => 385,  1120 => 383,  1116 => 382,  1113 => 381,  1110 => 380,  1108 => 379,  1105 => 378,  1095 => 312,  1093 => 371,  1091 => 369,  1088 => 308,  1078 => 364,  1072 => 362,  1070 => 361,  1067 => 299,  1059 => 355,  1048 => 290,  1046 => 352,  1026 => 351,  1023 => 350,  1014 => 272,  1011 => 344,  1008 => 343,  1005 => 342,  1003 => 341,  1000 => 340,  991 => 335,  988 => 334,  985 => 333,  982 => 261,  980 => 331,  977 => 330,  968 => 326,  960 => 324,  958 => 253,  956 => 322,  953 => 321,  946 => 315,  941 => 314,  939 => 243,  936 => 242,  929 => 306,  925 => 305,  919 => 303,  917 => 302,  909 => 301,  904 => 300,  901 => 299,  899 => 298,  896 => 297,  887 => 293,  884 => 292,  880 => 290,  878 => 219,  873 => 217,  865 => 213,  862 => 212,  859 => 284,  854 => 283,  852 => 282,  849 => 206,  834 => 274,  831 => 273,  828 => 197,  815 => 268,  812 => 190,  809 => 189,  802 => 263,  799 => 262,  791 => 256,  785 => 178,  782 => 253,  776 => 251,  773 => 250,  767 => 170,  764 => 169,  758 => 245,  756 => 165,  752 => 243,  748 => 242,  732 => 241,  729 => 155,  726 => 239,  723 => 238,  720 => 237,  717 => 236,  714 => 235,  711 => 234,  708 => 233,  706 => 473,  704 => 231,  701 => 230,  692 => 225,  690 => 469,  685 => 223,  682 => 467,  679 => 466,  676 => 220,  674 => 219,  671 => 218,  663 => 212,  660 => 464,  658 => 124,  655 => 209,  647 => 205,  644 => 204,  642 => 203,  639 => 202,  630 => 196,  626 => 195,  622 => 452,  618 => 193,  613 => 192,  610 => 191,  604 => 189,  601 => 446,  599 => 187,  596 => 106,  588 => 181,  585 => 180,  575 => 179,  570 => 178,  567 => 414,  561 => 175,  558 => 174,  556 => 173,  553 => 172,  545 => 167,  542 => 166,  540 => 165,  539 => 164,  538 => 163,  537 => 162,  534 => 161,  531 => 160,  528 => 159,  525 => 158,  518 => 155,  508 => 148,  502 => 145,  498 => 144,  494 => 142,  488 => 140,  486 => 139,  477 => 138,  468 => 135,  466 => 134,  455 => 133,  452 => 132,  450 => 64,  448 => 130,  445 => 129,  434 => 122,  431 => 189,  428 => 59,  422 => 184,  420 => 117,  415 => 180,  412 => 115,  410 => 114,  395 => 113,  377 => 37,  369 => 102,  361 => 152,  352 => 96,  330 => 89,  320 => 127,  304 => 83,  301 => 82,  280 => 73,  256 => 96,  251 => 69,  248 => 97,  245 => 335,  242 => 66,  218 => 54,  213 => 78,  184 => 63,  181 => 65,  114 => 111,  58 => 14,  34 => 5,  210 => 77,  207 => 75,  198 => 39,  148 => 28,  118 => 49,  100 => 36,  65 => 17,  506 => 187,  391 => 165,  388 => 42,  373 => 156,  370 => 148,  367 => 339,  358 => 151,  356 => 136,  346 => 132,  343 => 146,  333 => 90,  329 => 131,  326 => 138,  321 => 135,  318 => 111,  315 => 131,  303 => 106,  284 => 112,  281 => 114,  277 => 109,  274 => 110,  260 => 363,  255 => 101,  237 => 64,  216 => 79,  211 => 52,  206 => 110,  200 => 72,  197 => 69,  194 => 68,  186 => 239,  174 => 65,  165 => 83,  153 => 77,  150 => 55,  129 => 148,  126 => 147,  77 => 25,  70 => 26,  53 => 17,  408 => 176,  404 => 103,  401 => 172,  399 => 98,  396 => 185,  390 => 43,  385 => 41,  382 => 91,  376 => 89,  371 => 156,  363 => 153,  353 => 328,  349 => 95,  347 => 77,  344 => 119,  336 => 91,  334 => 141,  331 => 140,  328 => 139,  324 => 113,  317 => 67,  313 => 15,  310 => 85,  307 => 128,  295 => 80,  292 => 58,  289 => 113,  279 => 54,  276 => 111,  263 => 95,  259 => 103,  257 => 95,  249 => 90,  244 => 73,  239 => 63,  236 => 62,  233 => 87,  231 => 83,  228 => 55,  225 => 298,  222 => 83,  212 => 78,  202 => 94,  188 => 90,  180 => 34,  167 => 32,  161 => 63,  152 => 46,  127 => 35,  104 => 37,  97 => 41,  113 => 40,  81 => 23,  480 => 75,  474 => 137,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 108,  379 => 107,  374 => 36,  368 => 34,  365 => 145,  362 => 110,  360 => 77,  355 => 329,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 98,  268 => 373,  264 => 84,  258 => 94,  252 => 101,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 82,  169 => 210,  140 => 58,  132 => 28,  128 => 49,  107 => 37,  61 => 23,  273 => 380,  269 => 107,  254 => 94,  243 => 92,  240 => 326,  238 => 312,  235 => 89,  230 => 303,  227 => 86,  224 => 81,  221 => 77,  219 => 45,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 22,  38 => 7,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 40,  196 => 92,  183 => 35,  171 => 216,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 26,  138 => 30,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 16,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 111,  203 => 73,  199 => 93,  193 => 38,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 60,  149 => 182,  147 => 75,  144 => 42,  141 => 73,  133 => 23,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 32,  99 => 23,  95 => 39,  92 => 31,  86 => 34,  82 => 26,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
