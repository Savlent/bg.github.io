<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_bb6c0939f82cc8cf8cfb38a5e0529bb950992f606e3709a07ba22191b345150c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ggFigureWidth' => array($this, 'block_ggFigureWidth'),
            'ggMosaicHiddenItem' => array($this, 'block_ggMosaicHiddenItem'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'a_attributes_class_set' => array($this, 'block_a_attributes_class_set'),
            'a_attributes_href' => array($this, 'block_a_attributes_href'),
            'sggPopupLinkForDetailsButton' => array($this, 'block_sggPopupLinkForDetailsButton'),
            'figure_before' => array($this, 'block_figure_before'),
            'galleryTypeBlock' => array($this, 'block_galleryTypeBlock'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'previewImageUrlVar' => array($this, 'block_previewImageUrlVar'),
            'imageAttributesStyleSize' => array($this, 'block_imageAttributesStyleSize'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_class' => array($this, 'block_figcaption_class'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'ggImageCaptionEntry' => array($this, 'block_ggImageCaptionEntry'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figcaption_after_set_exif' => array($this, 'block_figcaption_after_set_exif'),
            'figure_after' => array($this, 'block_figure_after'),
            'oneGalleryImage' => array($this, 'block_oneGalleryImage'),
            'mosaicLastImageNumberWrapper' => array($this, 'block_mosaicLastImageNumberWrapper'),
            'mosaicFigcaptionWrapper' => array($this, 'block_mosaicFigcaptionWrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "type", array()) != "none")) {
            // line 3
            echo "\t\tborder: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "width", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";

\t";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) {
            // line 11
            echo "\t\t";
            $context["newImageDistance"] = ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "distance", array()) / 2);
            // line 12
            echo "\t\tmargin: ";
            echo twig_escape_filter($this->env, ((array_key_exists("newImageDistance", $context)) ? (_twig_default_filter((isset($context["newImageDistance"]) ? $context["newImageDistance"] : null), 0)) : (0)), "html", null, true);
            echo "px;
\t";
        } else {
            // line 14
            echo "\t\tmargin: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "distance", array()), "html", null, true);
            echo "px;
\t";
        }
        // line 18
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) {
            // line 19
            echo "\t\theight:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 21
        echo "\t";
        $this->displayBlock('ggFigureWidth', $context, $blocks);
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
";
        // line 30
        ob_start();
        // line 31
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array())))) {
            // line 32
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 34
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
";
        // line 38
        if ((array_key_exists("mosaicParams", $context) && ($this->getAttribute((isset($context["mosaicParams"]) ? $context["mosaicParams"] : null), "photoCountLeft", array()) > 0))) {
            // line 39
            echo "\t";
            $context["is_ext_link"] = false;
        } else {
            // line 41
            echo "\t";
            $context["is_ext_link"] = ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())));
        }
        // line 43
        echo "
";
        // line 44
        ob_start();
        // line 45
        echo "\t";
        if (((((isset($context["is_ext_link"]) ? $context["is_ext_link"] : null) == false) && ( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "0"))) {
            // line 46
            echo "\t\tgg-colorbox
\t";
        }
        // line 48
        echo "
\t";
        // line 49
        if ((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "0"))) {
            // line 50
            echo "\t\tgg-video
\t";
        }
        // line 52
        echo "
\t";
        // line 53
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") && (((isset($context["is_ext_link"]) ? $context["is_ext_link"] : null) == false) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))))))) {
            // line 54
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        echo "
";
        // line 58
        ob_start();
        // line 59
        echo "\t";
        if (((isset($context["is_ext_link"]) ? $context["is_ext_link"] : null) == true)) {
            // line 60
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()))), "html", null, true);
            echo "
\t\t";
            // line 61
            $context["link"] = true;
            // line 62
            echo "\t";
        } else {
            // line 63
            echo "\t\t";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array())), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 66
        echo "
";
        // line 67
        ob_start();
        // line 68
        echo "\t";
        if (((isset($context["link"]) ? $context["link"] : null) && $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 69
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "rel", array()), "html", null, true);
            echo "
\t";
        }
        // line 71
        echo "\t";
        if ((((isset($context["link"]) ? $context["link"] : null) == false) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "enabled", array()) == "false"))) {
            // line 72
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
";
        // line 76
        ob_start();
        // line 77
        echo "
\t";
        // line 78
        ob_start();
        // line 79
        echo "\t\t";
        $this->displayBlock('ggMosaicHiddenItem', $context, $blocks);
        // line 81
        echo "\t";
        $context["ggMosaicHiddenItemVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 82
        echo "
\t";
        // line 84
        echo "\t";
        ob_start();
        // line 85
        echo "\t\t";
        $this->displayBlock('a_attributes', $context, $blocks);
        // line 118
        echo "\t";
        $context["var_a_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 119
        echo "
\t";
        // line 120
        ob_start();
        // line 121
        echo "\t\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 126
        echo "\t";
        $context["var_figure_before"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 127
        echo "
\t";
        // line 128
        ob_start();
        // line 129
        echo "\t\t";
        $this->displayBlock('galleryTypeBlock', $context, $blocks);
        // line 152
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 153
        echo "
\t";
        // line 154
        ob_start();
        // line 155
        echo "\t\t";
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 178
        echo "\t";
        $context["var_figure_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 179
        echo "
\t";
        // line 180
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 181
        echo "
\t";
        // line 182
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0)) {
            // line 183
            echo "\t\t";
            $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array());
            // line 184
            echo "\t";
        } else {
            // line 185
            echo "\t\t";
            // line 186
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width_unit", array()) == 0)) {
                // line 187
                echo "\t\t\t";
                $context["width"] = round((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width", array()) / 100) * $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array())));
                // line 188
                echo "\t\t";
            } else {
                // line 189
                echo "\t\t\t";
                $context["width"] = null;
                // line 190
                echo "\t\t";
            }
            // line 191
            echo "\t";
        }
        // line 192
        echo "
\t";
        // line 193
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0)) {
            // line 194
            echo "\t\t";
            $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array());
            // line 195
            echo "\t";
        } else {
            // line 196
            echo "\t\t";
            // line 197
            echo "\t\t";
            $context["height"] = null;
            // line 198
            echo "\t\t";
            // line 199
            echo "\t\t";
            // line 200
            echo "\t\t";
            // line 201
            echo "\t\t";
            // line 202
            echo "\t\t";
            // line 203
            echo "\t";
        }
        // line 204
        echo "
\t";
        // line 205
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 3))) {
            // line 206
            echo "\t\t";
            $context["crop"] = 1;
            // line 207
            echo "\t";
        }
        // line 208
        echo "
\t";
        // line 209
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 1)) {
            // line 210
            echo "\t\t";
            $context["height"] = null;
            // line 211
            echo "\t";
        }
        // line 212
        echo "
\t";
        // line 213
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 2)) {
            // line 214
            echo "\t\t";
            $context["width"] = null;
            // line 215
            echo "\t";
        }
        // line 216
        echo "
\t";
        // line 217
        ob_start();
        // line 218
        echo "\t\t";
        $this->displayBlock('previewImageUrlVar', $context, $blocks);
        // line 225
        echo "\t";
        $context["previewImgUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 226
        echo "
\t";
        // line 227
        ob_start();
        // line 228
        echo "\t\t";
        $this->displayBlock('imageAttributesStyleSize', $context, $blocks);
        // line 236
        echo "\t";
        $context["imageAttributesStyleSizeVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 237
        echo "
\t";
        // line 238
        ob_start();
        // line 239
        echo "\t\t";
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 262
        echo "\t";
        $context["var_image_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 263
        echo "
\t";
        // line 264
        ob_start();
        // line 265
        echo "\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 288
        echo "\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 289
        echo "
\t";
        // line 290
        ob_start();
        // line 291
        echo "\t\tclass=\"";
        $this->displayBlock('figcaption_class', $context, $blocks);
        echo "\"
\t\t";
        // line 292
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 300
        echo "\t";
        $context["var_figcaption_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 301
        echo "
\t";
        // line 302
        $context["prepareImgUrl"] = (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
        // line 303
        echo "
\t";
        // line 304
        ob_start();
        // line 305
        echo "\t\t";
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 433
        echo "\t";
        $context["var_figcaption_wrap"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 434
        echo "
\t";
        // line 435
        ob_start();
        // line 436
        echo "\t\t";
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 476
        echo "\t";
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 477
        echo "
\t";
        // line 478
        ob_start();
        // line 479
        echo "\t\t";
        $this->displayBlock('figure_after', $context, $blocks);
        // line 484
        echo "\t";
        $context["var_figure_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 485
        echo "
\t";
        // line 487
        echo "\t";
        $this->displayBlock('oneGalleryImage', $context, $blocks);
        // line 521
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_ggFigureWidth($context, array $blocks = array())
    {
        // line 22
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) {
            // line 23
            echo "\t\t\twidth:auto;
\t\t";
        } else {
            // line 25
            echo "\t\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t";
        }
        // line 27
        echo "\t";
    }

    // line 79
    public function block_ggMosaicHiddenItem($context, array $blocks = array())
    {
        // line 80
        echo "\t\t";
    }

    // line 85
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 86
        echo "
\t\t\tid=\"gg-";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
        echo "\"

\t\t\t";
        // line 89
        $this->displayBlock('a_attributes_class_set', $context, $blocks);
        // line 92
        echo "
\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["ggMosaicHiddenItemVar"]) ? $context["ggMosaicHiddenItemVar"] : null), "html", null, true);
        echo "
\t\t\t";
        // line 94
        $this->displayBlock('a_attributes_href', $context, $blocks);
        // line 98
        echo "
\t\t\t";
        // line 99
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "disableImageTitle", array()) != 1)) {
            // line 100
            echo "\t\t\t\ttitle=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 102
        echo "
\t\t\t";
        // line 103
        $this->displayBlock('sggPopupLinkForDetailsButton', $context, $blocks);
        // line 116
        echo "\t\t\tstyle=\"border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t";
    }

    // line 89
    public function block_a_attributes_class_set($context, array $blocks = array())
    {
        // line 90
        echo "\t\t\t\tclass=\"gg-link ";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aClass"]) ? $context["aClass"] : null)), "html", null, true);
        echo " ";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t";
    }

    // line 94
    public function block_a_attributes_href($context, array $blocks = array())
    {
        // line 95
        echo "\t\t\t\thref=\"";
        echo twig_escape_filter($this->env, htmlspecialchars_decode(twig_trim_filter((isset($context["aHref"]) ? $context["aHref"] : null))), "html", null, true);
        echo "\"
\t\t\t\ttarget=\"";
        // line 96
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t";
    }

    // line 103
    public function block_sggPopupLinkForDetailsButton($context, array $blocks = array())
    {
        // line 104
        echo "\t\t\t\t";
        // line 105
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
            // line 106
            echo "\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 107
(isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()) == null)) {
            // line 108
            echo "\t\t\t\t\trel=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aRel"]) ? $context["aRel"] : null)), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t";
        // line 111
        echo "
\t\t\t\t";
        // line 112
        if (((isset($context["link"]) ? $context["link"] : null) == true)) {
            // line 113
            echo "\t\t\t\t\tdata-type=\"link\"
\t\t\t\t";
        }
        // line 115
        echo "\t\t\t";
    }

    // line 121
    public function block_figure_before($context, array $blocks = array())
    {
        // line 122
        echo "\t\t\t";
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 123
            echo "\t\t\t\t<a ";
            echo twig_escape_filter($this->env, (isset($context["var_a_attributes"]) ? $context["var_a_attributes"] : null), "html", null, true);
            echo " >
\t\t\t";
        }
        // line 125
        echo "\t\t";
    }

    // line 129
    public function block_galleryTypeBlock($context, array $blocks = array())
    {
        // line 130
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false")) {
            // line 131
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
                // line 132
                echo "\t\t\t\t\ticons
\t\t\t\t";
            } else {
                // line 134
                echo "\t\t\t\t\tnone
\t\t\t\t";
            }
            // line 136
            echo "\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
                // line 138
                echo "\t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true") && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "captionEffect", array()), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 139
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "captionEffect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
                    // line 145
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 147
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t";
            }
            // line 150
            echo "\t\t\t";
        }
        // line 151
        echo "\t\t";
    }

    // line 155
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 156
        echo "\t\t\tclass=\"grid-gallery-caption
\t\t\t";
        // line 157
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        // line 158
        echo "\t\t\t";
        echo twig_escape_filter($this->env, (isset($context["ggMosaicHiddenItemVar"]) ? $context["ggMosaicHiddenItemVar"] : null), "html", null, true);
        echo "
\t\t\t";
        // line 159
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 160
            echo "\t\t\t\tshadow-show
\t\t\t";
        }
        // line 162
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 163
            echo "\t\t\t\tshadow-hide
\t\t\t";
        }
        // line 164
        echo "\"
\t\t\tdata-grid-gallery-type=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["galleryType"]) ? $context["galleryType"] : null)), "html", null, true);
        echo "\"
\t\t\tdata-index=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
        echo "\"
\t\t\tstyle=\"display:none;";
        // line 167
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figureStyle"]) ? $context["figureStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 168
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true")) {
            // line 169
            echo "\t\t\t\t\t";
            ob_start();
            // line 170
            echo "\t\t\t\t\t\t";
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                // line 171
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 173
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 176
            echo "\t\t\t\t";
        }
        // line 177
        echo "\t\t";
    }

    // line 218
    public function block_previewImageUrlVar($context, array $blocks = array())
    {
        // line 219
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "isNotRealAttachment", array()) == 1)) {
            // line 220
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 222
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "id", array()), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "cropPosition", array()), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100")))), "html", null, true);
            echo "
\t\t\t";
        }
        // line 224
        echo "\t\t";
    }

    // line 228
    public function block_imageAttributesStyleSize($context, array $blocks = array())
    {
        // line 229
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array())))) {
            // line 230
            echo "\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 232
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array())))) {
            // line 233
            echo "\t\t\t\theight:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 235
        echo "\t\t";
    }

    // line 239
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 240
        echo "\t\t\t";
        $context["imgSrcStr"] = twig_replace_filter(twig_trim_filter((isset($context["previewImgUrl"]) ? $context["previewImgUrl"] : null)), "/%20\$/", "");
        // line 241
        echo "\t\t\t";
        $context["imgClassStr"] = "ggImg";
        // line 242
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lazyload", array()), "enabled", array()) == "1")) {
            // line 243
            echo "\t\t\t\tdata-gg-real-image-href=\"";
            echo twig_escape_filter($this->env, (isset($context["imgSrcStr"]) ? $context["imgSrcStr"] : null), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 245
            echo "\t\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lazyload", array()), "defaultImgUrl", array()))) {
                // line 246
                echo "\t\t\t\t\t\t";
                $context["imgSrcStr"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lazyload", array()), "defaultImgUrl", array());
                // line 247
                echo "\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t\t";
            $context["imgClassStr"] = ((isset($context["imgClassStr"]) ? $context["imgClassStr"] : null) . " ggLazyImg");
            // line 249
            echo "\t\t\t\t";
            // line 250
            echo "\t\t\t";
        }
        // line 251
        echo "\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, (isset($context["imgSrcStr"]) ? $context["imgSrcStr"] : null), "html", null, true);
        echo "\"
\t\t\tclass=\"";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["imgClassStr"]) ? $context["imgClassStr"] : null), "html", null, true);
        echo "\"
\t\t\talt=\"";
        // line 253
        if ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array())) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array()) == " "))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array()), "html", null, true);
        }
        echo "\"
\t\t\t";
        // line 254
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "disableImageTitle", array()) != 1)) {
            // line 255
            echo "\t\t\t\ttitle=\"";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
            }
            echo "\"
\t\t\t";
        }
        // line 257
        echo "\t\t\tdata-description=\"";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-caption=\"";
        // line 258
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()));
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()));
        }
        echo "\"
\t\t\tdata-title=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["imageAttributesStyleSizeVar"]) ? $context["imageAttributesStyleSizeVar"] : null), "html", null, true);
        echo "\"
\t\t";
    }

    // line 265
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 266
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 267
            echo "\t\t\t\tfont-family:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 268
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 269
                echo "\t\t\t\t\tbackground-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\theight : 100%;
\t\t\t\t\t";
                // line 272
                echo "\t\t\t\t";
            } else {
                // line 273
                echo "\t\t\t\t\theight : 100%;
\t\t\t\t\tbackground-color: transparent;
\t\t\t\t";
            }
            // line 276
            echo "\t\t\t";
        } else {
            // line 277
            echo "\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\tbackground-color:";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\tfont-size:";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\ttext-align:";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), "html", null, true);
            echo ";
\t\t\t\tfont-family:";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 282
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 283
                echo "\t\t\t\t\topacity:1;
\t\t\t\t\tbottom:0;
\t\t\t\t";
            }
            // line 286
            echo "\t\t\t";
        }
        // line 287
        echo "\t\t";
    }

    // line 291
    public function block_figcaption_class($context, array $blocks = array())
    {
    }

    // line 292
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 293
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 294
            echo "\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array()), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t";
        } else {
            // line 296
            echo "\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 298
        echo "\t\t\tstyle=\"";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
        echo "\"
\t\t";
    }

    // line 305
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 306
        echo "\t\t\t";
        // line 307
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 308
            echo "\t\t\t\t<div
\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 309
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\tdata-margin=\"";
            // line 310
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t>
\t\t\t\t\t";
            // line 313
            echo "\t\t\t\t\t";
            $context["showFewIconsVar"] = (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "showFewIcons", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "showFewIcons", array()), "default")) : ("default"));
            // line 314
            echo "\t\t\t\t\t";
            $context["isShowVideoIcon"] = 0;
            // line 315
            echo "\t\t\t\t\t";
            if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())) && ((            // line 317
(isset($context["showFewIconsVar"]) ? $context["showFewIconsVar"] : null) == "default") || ((            // line 319
(isset($context["showFewIconsVar"]) ? $context["showFewIconsVar"] : null) == "params") && ($this->getAttribute($this->getAttribute(            // line 320
(isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "isVideoIcon", array()) == "1"))))) {
                // line 324
                echo "\t\t\t\t\t\t";
                $context["isShowVideoIcon"] = 1;
                // line 325
                echo "\t\t\t\t\t";
            }
            // line 326
            echo "
\t\t\t\t\t";
            // line 327
            $context["isShowLinkIcon"] = 0;
            // line 328
            echo "\t\t\t\t\t";
            if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())) && ((            // line 330
(isset($context["showFewIconsVar"]) ? $context["showFewIconsVar"] : null) == "default") || ((            // line 332
(isset($context["showFewIconsVar"]) ? $context["showFewIconsVar"] : null) == "params") && ($this->getAttribute($this->getAttribute(            // line 333
(isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "isLinkIcon", array()) == "1"))))) {
                // line 337
                echo "\t\t\t\t\t\t";
                $context["isShowLinkIcon"] = 1;
                // line 338
                echo "\t\t\t\t\t";
            }
            // line 339
            echo "
\t\t\t\t\t";
            // line 340
            if (((isset($context["isShowVideoIcon"]) ? $context["isShowVideoIcon"] : null) == 1)) {
                // line 341
                echo "\t\t\t\t\t\t";
                ob_start();
                // line 342
                echo "\t\t\t\t\t\t\t";
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) {
                    // line 343
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()), (isset($context["youtube"]) ? $context["youtube"] : null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 344
                    $context["videoSource"] = "youtube";
                    // line 345
                    echo "\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) {
                    // line 346
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()), (isset($context["vimeoPattern"]) ? $context["vimeoPattern"] : null), (isset($context["vimeoReplace"]) ? $context["vimeoReplace"] : null))) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 347
                    $context["videoSource"] = "vimeo";
                    // line 348
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 349
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 351
                echo "\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 352
                echo "
\t\t\t\t\t\t";
                // line 353
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 354
                echo "
\t\t\t\t\t\t";
                // line 355
                ob_start();
                // line 356
                echo "\t\t\t\t\t\t\tmargin-left:";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)) . "px"), "html", null, true);
                echo ";
\t\t\t\t\t\t\tmargin-right:";
                // line 357
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)) . "px"), "html", null, true);
                echo ";
\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 359
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 360
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["videoUrl"]) ? $context["videoUrl"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-id=\"gg-";
                // line 361
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t";
                // line 362
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "disableImageTitle", array()) != 1)) {
                    // line 363
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t";
                }
                // line 365
                echo "
\t\t\t\t\t\t\tclass=\"hi-icon gg-video ";
                // line 366
                echo twig_escape_filter($this->env, (isset($context["videoIcon"]) ? $context["videoIcon"] : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 367
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2")) {
                    echo " pbox";
                }
                // line 368
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\tstyle=\"";
                // line 369
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-video-source=\"";
                // line 370
                echo twig_escape_filter($this->env, (isset($context["videoSource"]) ? $context["videoSource"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 372
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1")) {
                    // line 373
                    echo "\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                } else {
                    // line 375
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 376
                    echo "\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t";
                    // line 378
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 379
                echo "\t\t\t\t\t\t>
\t\t\t\t\t\t\t";
                // line 381
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 383
            echo "
\t\t\t\t\t";
            // line 384
            if (((isset($context["isShowLinkIcon"]) ? $context["isShowLinkIcon"] : null) == 1)) {
                // line 385
                echo "\t\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                // line 386
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "disableImageTitle", array()) != 1)) {
                    // line 387
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t";
                }
                // line 389
                echo "\t\t\t\t\t\t\tdata-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\" href=\"";
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "openByLink", array()) == "on")) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["prepareImgUrl"]) ? $context["prepareImgUrl"] : null), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()), "html", null, true);
                    echo " ";
                }
                echo " \" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link ";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "openByLink", array()) == "on"))) {
                    echo "pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t";
            }
            // line 391
            echo "
\t\t\t\t\t";
            // line 392
            $context["isShowPopupIcon"] = 0;
            // line 393
            echo "\t\t\t\t\t";
            if (((((            // line 394
(isset($context["showFewIconsVar"]) ? $context["showFewIconsVar"] : null) == "default") && twig_test_empty(            // line 395
(isset($context["videoUrl"]) ? $context["videoUrl"] : null))) && twig_test_empty($this->getAttribute($this->getAttribute(            // line 396
(isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()))) || ((            // line 399
(isset($context["showFewIconsVar"]) ? $context["showFewIconsVar"] : null) == "params") && ($this->getAttribute($this->getAttribute(            // line 400
(isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "isPopupIcon", array()) == "1")))) {
                // line 403
                echo "\t\t\t\t\t\t";
                $context["isShowPopupIcon"] = 1;
                // line 404
                echo "\t\t\t\t\t";
            }
            // line 405
            echo "
\t\t\t\t\t";
            // line 406
            if (((isset($context["isShowPopupIcon"]) ? $context["isShowPopupIcon"] : null) == 1)) {
                // line 407
                echo "\t\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                // line 408
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "disableImageTitle", array()) != 1)) {
                    // line 409
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t";
                }
                // line 411
                echo "\t\t\t\t\t\t\tdata-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["prepareImgUrl"]) ? $context["prepareImgUrl"] : null), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") &&  !array_key_exists("link", $context))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 412
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1")) {
                    // line 413
                    echo "\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                }
                // line 414
                echo ">Open in pop-up window</a>
\t\t\t\t\t";
            }
            // line 416
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 418
        echo "
\t\t\t";
        // line 419
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 420
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true")) {
                // line 421
                echo "\t\t\t\t\t";
                $this->displayBlock('ggImageCaptionEntry', $context, $blocks);
                // line 430
                echo "\t\t\t\t";
            }
            // line 431
            echo "\t\t\t";
        }
        // line 432
        echo "\t\t";
    }

    // line 421
    public function block_ggImageCaptionEntry($context, array $blocks = array())
    {
        // line 422
        echo "\t\t\t\t\t\t";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
            // line 423
            echo "\t\t\t\t\t\t\t<div class=\"gg-image-caption fitvidsignore ";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "rtl", array()) == true)) {
                echo "ggRtlClass";
            }
            echo "\" ";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "rtl", array()) == true)) {
                echo "dir=\"rtl\"";
            }
            echo " style=\"font-size:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t<object type=\"none/none\">
\t\t\t\t\t\t\t\t\t";
            // line 425
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 429
        echo "\t\t\t\t\t";
    }

    // line 436
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 437
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true"))) {
            // line 438
            echo "
\t\t\t\t";
            // line 439
            ob_start();
            // line 440
            echo "\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\tbackground-color:";
            // line 441
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\tfont-size:";
            // line 442
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\tfont-family:";
            // line 443
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
            // line 444
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 445
                echo "\t\t\t\t\t\ttext-align:";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t";
            }
            // line 447
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 448
                echo "\t\t\t\t\t\topacity:1;
\t\t\t\t\t\tbottom:0;
\t\t\t\t\t";
            }
            // line 451
            echo "\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 453
            echo "
\t\t\t\t";
            // line 454
            if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array())) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "tooltip", array()) == "false"))) {
                // line 455
                echo "\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"caption-with-";
                // line 456
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\t\tstyle=\"";
                // line 457
                echo twig_escape_filter($this->env, (isset($context["captionStyle"]) ? $context["captionStyle"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-alpha=\"";
                // line 458
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 460
                $context["ggCaptionText"] = $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array());
                // line 461
                echo "\t\t\t\t\t\t\t";
                $context["ggCaptionTextStyle"] = ((((("padding: 10px;display:table-cell;font-size:" . $this->getAttribute($this->getAttribute($this->getAttribute(                // line 462
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array())) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em"))) . ";vertical-align:") . $this->getAttribute($this->getAttribute($this->getAttribute(                // line 463
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array())) . ";");
                // line 464
                echo "\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
                    // line 465
                    echo "\t\t\t\t\t\t\t\t";
                    $context["ggCaptionText"] = $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array());
                    // line 466
                    echo "\t\t\t\t\t\t\t\t";
                    $context["ggCaptionTextStyle"] = ((isset($context["ggCaptionTextStyle"]) ? $context["ggCaptionTextStyle"] : null) . "font-weight: 800;");
                    // line 467
                    echo "\t\t\t\t\t\t\t";
                }
                // line 468
                echo "\t\t\t\t\t\t\t";
                $this->displayBlock('figcaption_after_set_exif', $context, $blocks);
                // line 471
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 474
            echo "\t\t\t";
        }
        // line 475
        echo "\t\t";
    }

    // line 468
    public function block_figcaption_after_set_exif($context, array $blocks = array())
    {
        // line 469
        echo "\t\t\t\t\t\t\t\t<span style=\"";
        echo twig_escape_filter($this->env, (isset($context["ggCaptionTextStyle"]) ? $context["ggCaptionTextStyle"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["ggCaptionText"]) ? $context["ggCaptionText"] : null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t";
    }

    // line 479
    public function block_figure_after($context, array $blocks = array())
    {
        // line 480
        echo "\t\t\t";
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 481
            echo "\t\t\t\t</a>
\t\t\t";
        }
        // line 483
        echo "\t\t";
    }

    // line 487
    public function block_oneGalleryImage($context, array $blocks = array())
    {
        // line 488
        echo "\t\t";
        echo twig_escape_filter($this->env, (isset($context["var_figure_before"]) ? $context["var_figure_before"] : null), "html", null, true);
        echo "
\t\t<FIGURE ";
        // line 489
        echo twig_escape_filter($this->env, (isset($context["var_figure_attributes"]) ? $context["var_figure_attributes"] : null), "html", null, true);
        echo " >
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 491
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "overlay", array()) == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 492
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 493
        echo "\"
\t\t\t\t style=\"
\t\t\t\t ";
        // line 495
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "0") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "3"))) {
            // line 496
            echo "\t\t\t\t\t\t width:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t height:";
            // line 497
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t overflow:hidden;
\t\t\t\t ";
        }
        // line 499
        echo "\">

\t\t\t\t<img ";
        // line 501
        echo twig_escape_filter($this->env, (isset($context["var_image_attributes"]) ? $context["var_image_attributes"] : null), "html", null, true);
        echo " />
\t\t\t</div>
\t\t\t";
        // line 503
        $this->displayBlock('mosaicLastImageNumberWrapper', $context, $blocks);
        // line 505
        echo "\t\t\t";
        $this->displayBlock('mosaicFigcaptionWrapper', $context, $blocks);
        // line 518
        echo "\t\t</FIGURE>
\t\t";
        // line 519
        echo twig_escape_filter($this->env, (isset($context["var_figure_after"]) ? $context["var_figure_after"] : null), "html", null, true);
        echo "
\t";
    }

    // line 503
    public function block_mosaicLastImageNumberWrapper($context, array $blocks = array())
    {
        // line 504
        echo "\t\t\t";
    }

    // line 505
    public function block_mosaicFigcaptionWrapper($context, array $blocks = array())
    {
        // line 506
        echo "\t\t\t\t<FIGCAPTION ";
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_attributes"]) ? $context["var_figcaption_attributes"] : null), "html", null, true);
        echo "\t>
\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t";
        // line 510
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 511
            echo "\t\t\t\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t\t";
        }
        // line 512
        echo "\">
\t\t\t\t\t\t";
        // line 513
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_wrap"]) ? $context["var_figcaption_wrap"] : null), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</FIGCAPTION>
\t\t\t\t";
        // line 516
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_after"]) ? $context["var_figcaption_after"] : null), "html", null, true);
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1582 => 516,  1576 => 513,  1573 => 512,  1567 => 511,  1565 => 510,  1557 => 506,  1554 => 505,  1550 => 504,  1547 => 503,  1541 => 519,  1538 => 518,  1535 => 505,  1533 => 503,  1528 => 501,  1524 => 499,  1518 => 497,  1513 => 496,  1511 => 495,  1507 => 493,  1503 => 492,  1501 => 491,  1496 => 489,  1491 => 488,  1488 => 487,  1484 => 483,  1480 => 481,  1477 => 480,  1474 => 479,  1465 => 469,  1462 => 468,  1458 => 475,  1455 => 474,  1450 => 471,  1447 => 468,  1444 => 467,  1441 => 466,  1438 => 465,  1435 => 464,  1433 => 463,  1432 => 462,  1430 => 461,  1428 => 460,  1423 => 458,  1419 => 457,  1411 => 456,  1408 => 455,  1406 => 454,  1403 => 453,  1397 => 451,  1392 => 448,  1389 => 447,  1383 => 445,  1381 => 444,  1377 => 443,  1372 => 442,  1368 => 441,  1363 => 440,  1361 => 439,  1358 => 438,  1355 => 437,  1352 => 436,  1348 => 429,  1341 => 425,  1326 => 423,  1323 => 422,  1320 => 421,  1316 => 432,  1313 => 431,  1310 => 430,  1307 => 421,  1304 => 420,  1302 => 419,  1299 => 418,  1295 => 416,  1291 => 414,  1287 => 413,  1285 => 412,  1270 => 411,  1264 => 409,  1262 => 408,  1259 => 407,  1257 => 406,  1254 => 405,  1251 => 404,  1248 => 403,  1246 => 400,  1245 => 399,  1244 => 396,  1243 => 395,  1242 => 394,  1240 => 393,  1238 => 392,  1235 => 391,  1209 => 389,  1203 => 387,  1201 => 386,  1198 => 385,  1196 => 384,  1193 => 383,  1189 => 381,  1186 => 379,  1183 => 378,  1180 => 376,  1178 => 375,  1174 => 373,  1171 => 372,  1167 => 370,  1163 => 369,  1160 => 368,  1156 => 367,  1152 => 366,  1149 => 365,  1143 => 363,  1141 => 362,  1135 => 361,  1131 => 360,  1128 => 359,  1123 => 357,  1118 => 356,  1116 => 355,  1113 => 354,  1111 => 353,  1108 => 352,  1105 => 351,  1099 => 349,  1096 => 348,  1094 => 347,  1089 => 346,  1086 => 345,  1084 => 344,  1079 => 343,  1076 => 342,  1073 => 341,  1071 => 340,  1068 => 339,  1065 => 338,  1062 => 337,  1060 => 333,  1059 => 332,  1058 => 330,  1056 => 328,  1054 => 327,  1051 => 326,  1048 => 325,  1045 => 324,  1043 => 320,  1042 => 319,  1041 => 317,  1039 => 315,  1036 => 314,  1033 => 313,  1028 => 310,  1022 => 309,  1019 => 308,  1016 => 307,  1014 => 306,  1011 => 305,  1004 => 298,  998 => 296,  992 => 294,  989 => 293,  986 => 292,  981 => 291,  977 => 287,  974 => 286,  969 => 283,  967 => 282,  963 => 281,  959 => 280,  954 => 279,  950 => 278,  945 => 277,  942 => 276,  937 => 273,  934 => 272,  928 => 269,  926 => 268,  921 => 267,  918 => 266,  915 => 265,  909 => 260,  905 => 259,  897 => 258,  888 => 257,  878 => 255,  876 => 254,  868 => 253,  864 => 252,  859 => 251,  856 => 250,  854 => 249,  851 => 248,  848 => 247,  845 => 246,  842 => 245,  837 => 243,  834 => 242,  831 => 241,  828 => 240,  825 => 239,  821 => 235,  815 => 233,  812 => 232,  806 => 230,  803 => 229,  800 => 228,  796 => 224,  790 => 222,  784 => 220,  781 => 219,  778 => 218,  774 => 177,  771 => 176,  768 => 175,  764 => 173,  758 => 171,  755 => 170,  752 => 169,  750 => 168,  746 => 167,  742 => 166,  738 => 165,  735 => 164,  731 => 163,  728 => 162,  724 => 160,  722 => 159,  717 => 158,  713 => 157,  710 => 156,  707 => 155,  703 => 151,  700 => 150,  697 => 149,  691 => 147,  685 => 145,  682 => 144,  679 => 143,  673 => 141,  667 => 139,  664 => 138,  661 => 137,  658 => 136,  654 => 134,  650 => 132,  647 => 131,  644 => 130,  641 => 129,  637 => 125,  631 => 123,  628 => 122,  625 => 121,  621 => 115,  617 => 113,  615 => 112,  612 => 111,  610 => 110,  604 => 108,  602 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  585 => 96,  580 => 95,  577 => 94,  566 => 90,  563 => 89,  556 => 116,  554 => 103,  551 => 102,  545 => 100,  543 => 99,  540 => 98,  538 => 94,  534 => 93,  531 => 92,  529 => 89,  522 => 87,  519 => 86,  516 => 85,  512 => 80,  509 => 79,  505 => 27,  499 => 25,  495 => 23,  492 => 22,  489 => 21,  484 => 521,  481 => 487,  478 => 485,  475 => 484,  472 => 479,  470 => 478,  467 => 477,  464 => 476,  461 => 436,  459 => 435,  456 => 434,  453 => 433,  450 => 305,  448 => 304,  445 => 303,  443 => 302,  440 => 301,  437 => 300,  435 => 292,  430 => 291,  428 => 290,  425 => 289,  422 => 288,  419 => 265,  417 => 264,  414 => 263,  411 => 262,  408 => 239,  406 => 238,  403 => 237,  400 => 236,  397 => 228,  395 => 227,  392 => 226,  389 => 225,  386 => 218,  384 => 217,  381 => 216,  378 => 215,  375 => 214,  373 => 213,  370 => 212,  367 => 211,  364 => 210,  362 => 209,  359 => 208,  356 => 207,  353 => 206,  351 => 205,  348 => 204,  345 => 203,  343 => 202,  341 => 201,  339 => 200,  337 => 199,  335 => 198,  332 => 197,  330 => 196,  327 => 195,  324 => 194,  322 => 193,  319 => 192,  316 => 191,  313 => 190,  310 => 189,  307 => 188,  304 => 187,  301 => 186,  299 => 185,  296 => 184,  293 => 183,  291 => 182,  288 => 181,  286 => 180,  283 => 179,  280 => 178,  277 => 155,  275 => 154,  272 => 153,  269 => 152,  266 => 129,  264 => 128,  261 => 127,  258 => 126,  255 => 121,  253 => 120,  250 => 119,  247 => 118,  244 => 85,  241 => 84,  238 => 82,  235 => 81,  232 => 79,  230 => 78,  227 => 77,  225 => 76,  222 => 75,  217 => 72,  214 => 71,  208 => 69,  205 => 68,  203 => 67,  200 => 66,  193 => 63,  190 => 62,  188 => 61,  183 => 60,  180 => 59,  178 => 58,  175 => 57,  170 => 54,  168 => 53,  165 => 52,  161 => 50,  159 => 49,  156 => 48,  152 => 46,  149 => 45,  147 => 44,  144 => 43,  140 => 41,  136 => 39,  134 => 38,  131 => 37,  124 => 34,  118 => 32,  115 => 31,  113 => 30,  110 => 29,  106 => 21,  100 => 19,  97 => 18,  91 => 14,  85 => 12,  82 => 11,  80 => 10,  76 => 8,  64 => 7,  62 => 6,  57 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/helpers.twig", "C:\\OSPanel\\OSPanel\\domains\\wptest\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\helpers.twig");
    }
}
