<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class My_Custom_Widget extends \Elementor\Widget_Base
{

    // Your widget's name, title, icon and category
    public function get_name()
    {
        return 'image_accordion';
    }

    public function get_title()
    {
        return __('Image Accordion', 'image_accordion');
    }

    public function get_icon()
    {
        return 'eicon-accordion';
    }

    public function get_categories()
    {
        return ['general'];
    }


    // Your widget's sidebar settings
    protected function _register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

//        Accoedion Image
        $this->add_control(
            'accordion_image_1',
            [
                'label' => __('Accordion Image 1', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'accordion_image_2',
            [
                'label' => __('Accordion Image 2', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'accordion_image_3',
            [
                'label' => __('Accordion Image 3', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'accordion_image_4',
            [
                'label' => __('Accordion Image 4', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'accordion_image_5',
            [
                'label' => __('Accordion Image 5', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

//        According Button Text
        $this->add_control(
            'button_text_1',
            [
                'label' => __('According Button Text 1', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Me', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'button_text_2',
            [
                'label' => __('According Button Text 2', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Me', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'button_text_3',
            [
                'label' => __('According Button Text 3', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Me', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'button_text_4',
            [
                'label' => __('According Button Text 4', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Me', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'button_text_5',
            [
                'label' => __('According Button Text 5', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Me', 'your-plugin-text-domain'),
            ]
        );

//        Accordion Sub Heading
        $this->add_control(
            'accordion_subheading_1',
            [
                'label' => __('Meet Heading 1', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Subheading Text', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_subheading_2',
            [
                'label' => __('Meet Heading 2', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Subheading Text', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_subheading_3',
            [
                'label' => __('Meet Heading 3', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Subheading Text', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_subheading_4',
            [
                'label' => __('Meet Heading 4', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Subheading Text', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_subheading_5',
            [
                'label' => __('Meet Heading 5', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Subheading Text', 'your-plugin-text-domain'),
            ]
        );
//        Accordion Heading
        $this->add_control(
            'accordion_heading_1',
            [
                'label' => __('Accordion Name 1', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Widget Title', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_heading_2',
            [
                'label' => __('Accordion Name 2', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Widget Title', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_heading_3',
            [
                'label' => __('Accordion Name 3', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Widget Title', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_heading_4',
            [
                'label' => __('Accordion Name 4', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Widget Title', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_heading_5',
            [
                'label' => __('Accordion Name 5', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Widget Title', 'your-plugin-text-domain'),
            ]
        );
//        Accordion Description
        $this->add_control(
            'accordion_description_1',
            [
                'label' => __('Description 1', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Enter your long text here', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_description_2',
            [
                'label' => __('Description 2', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Enter your long text here', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_description_3',
            [
                'label' => __('Description 3', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Enter your long text here', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_description_4',
            [
                'label' => __('Description 4', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Enter your long text here', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'accordion_description_5',
            [
                'label' => __('Description 5', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Enter your long text here', 'your-plugin-text-domain'),
            ]
        );
//        Accordion Link Text
        $this->add_control(
            'link_text_1',
            [
                'label' => __('Read More 1', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Here', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'link_text_2',
            [
                'label' => __('Read More 2', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Here', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'link_text_3',
            [
                'label' => __('Read More 3', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Here', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'link_text_4',
            [
                'label' => __('Read More 4', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Here', 'your-plugin-text-domain'),
            ]
        );
        $this->add_control(
            'link_text_5',
            [
                'label' => __('Read More 5', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Click Here', 'your-plugin-text-domain'),
            ]
        );
//        Accordion Link URL
        $this->add_control(
            'link_url_1',
            [
                'label' => __('Read More URL 1', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://example.com',
                'default' => [
                    'url' => 'https://example.com',
                ],
            ]
        );
        $this->add_control(
            'link_url_2',
            [
                'label' => __('Read More URL 2', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://example.com',
                'default' => [
                    'url' => 'https://example.com',
                ],
            ]
        );
        $this->add_control(
            'link_url_3',
            [
                'label' => __('Read More URL 3', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://example.com',
                'default' => [
                    'url' => 'https://example.com',
                ],
            ]
        );
        $this->add_control(
            'link_url_4',
            [
                'label' => __('Read More URL 4', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://example.com',
                'default' => [
                    'url' => 'https://example.com',
                ],
            ]
        );
        $this->add_control(
            'link_url_5',
            [
                'label' => __('Read More URL 5', 'your-plugin-text-domain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://example.com',
                'default' => [
                    'url' => 'https://example.com',
                ],
            ]
        );
        $this->end_controls_section();
    }


    // What your widget displays on the front-end
    protected function render()
    {
        $settings = $this->get_settings_for_display();
//        Accordion Image
        $image_url_1 = $settings['accordion_image_1']['url'];
        $image_url_2 = $settings['accordion_image_2']['url'];
        $image_url_3 = $settings['accordion_image_3']['url'];
        $image_url_4 = $settings['accordion_image_4']['url'];
        $image_url_5 = $settings['accordion_image_5']['url'];
//        Accordion Button Text
        $button_text_1 = $settings['button_text_1'];
        $button_text_2 = $settings['button_text_2'];
        $button_text_3 = $settings['button_text_3'];
        $button_text_4 = $settings['button_text_4'];
        $button_text_5 = $settings['button_text_5'];
//        Accordion Sub Heading
        $subheading_1 = $settings['accordion_subheading_1'];
        $subheading_2 = $settings['accordion_subheading_2'];
        $subheading_3 = $settings['accordion_subheading_3'];
        $subheading_4 = $settings['accordion_subheading_4'];
        $subheading_5 = $settings['accordion_subheading_5'];
//        Accordion Heading
        $heading_1 = $settings['accordion_heading_1'];
        $heading_2 = $settings['accordion_heading_2'];
        $heading_3 = $settings['accordion_heading_3'];
        $heading_4 = $settings['accordion_heading_4'];
        $heading_5 = $settings['accordion_heading_5'];
//        Accordion Description
        $description_1 = $settings['accordion_description_1'];
        $description_2 = $settings['accordion_description_2'];
        $description_3 = $settings['accordion_description_3'];
        $description_4 = $settings['accordion_description_4'];
        $description_5 = $settings['accordion_description_5'];
//         Accordion Link Text
        $link_text_1 = $settings['link_text_1'];
        $link_text_2 = $settings['link_text_2'];
        $link_text_3 = $settings['link_text_3'];
        $link_text_4 = $settings['link_text_4'];
        $link_text_5 = $settings['link_text_5'];
//        Accordion Link
        $link_url_1 = !empty($settings['link_url_1']['url']) ? $settings['link_url_1']['url'] : '#';
        $link_url_2 = !empty($settings['link_url_2']['url']) ? $settings['link_url_2']['url'] : '#';
        $link_url_3 = !empty($settings['link_url_3']['url']) ? $settings['link_url_3']['url'] : '#';
        $link_url_4 = !empty($settings['link_url_4']['url']) ? $settings['link_url_4']['url'] : '#';
        $link_url_5 = !empty($settings['link_url_5']['url']) ? $settings['link_url_5']['url'] : '#';

        ?>
        <div class="accordion  js-accordion">
            <div class="accordion__panel  is-open  js-accordion-panel">
                <h2 id="panel1-heading" class="accordion-button">
                    <button class="accordion__trigger  js-accordion-trigger" aria-controls="panel1-content"
                            aria-expanded="true">
                        <?php echo $button_text_1; ?>
                    </button>
                </h2>

                <div class="js-accordion-content" id="panel1-content" aria-labelledby="panel1-heading"
                     aria-hidden="false"
                     role="region">
                    <div class="accordion__content">
                        <h3>
                            <?php echo $subheading_1; ?>
                        </h3>
                        <h1>
                            <?php echo $heading_1; ?>
                        </h1>
                        <p>
                            <?php echo $description_1; ?>
                        </p>
                        <a href="
                            <?php echo $link_url_1; ?>
                        ">
                            <?php echo $link_text_1; ?>
                        </a>
                    </div>
                    <img class="accordion__img" width="1280" height="720"
                         src="<?php echo $image_url_1; ?>"
                         alt="">
                </div>
            </div>

            <div class="accordion__panel  js-accordion-panel">
                <h2 id="panel3-heading" class="accordion-button">
                    <button class="accordion__trigger  js-accordion-trigger" aria-controls="panel3-content"
                            aria-expanded="false">
                        <?php echo $button_text_2; ?>
                    </button>
                </h2>

                <div class="js-accordion-content" id="panel3-content" aria-labelledby="panel3-heading"
                     aria-hidden="true"
                     role="region">
                    <div class="accordion__content">
                        <h3>
                            <?php echo $subheading_2; ?>
                        </h3>
                        <h1>
                            <?php echo $heading_2; ?>
                        </h1>
                        <p>
                            <?php echo $description_2; ?>
                        </p>
                        <a href="
                            <?php echo $link_url_2; ?>
                        ">
                            <?php echo $link_text_2; ?>
                        </a>
                    </div>
                    <img class="accordion__img" loading="lazy" width="1280" height="720"
                         src="<?php echo $image_url_2; ?>" alt="">
                </div>
            </div>

            <div class="accordion__panel  js-accordion-panel">
                <h2 id="panel4-heading" class="accordion-button">
                    <button class="accordion__trigger  js-accordion-trigger" aria-controls="panel4-content"
                            aria-expanded="false">
                        <?php echo $button_text_3; ?>
                    </button>
                </h2>

                <div class="js-accordion-content" id="panel4-content" aria-labelledby="panel4-heading"
                     aria-hidden="true"
                     role="region">
                    <div class="accordion__content">
                        <h3>
                            <?php echo $subheading_3; ?>
                        </h3>
                        <h1>
                            <?php echo $heading_3; ?>
                        </h1>
                        <p>
                            <?php echo $description_3; ?>
                        </p>
                        <a href="
                            <?php echo $link_url_3; ?>
                        ">
                            <?php echo $link_text_3; ?>
                        </a>
                    </div>
                    <img class="accordion__img" loading="lazy" width="1280" height="720"
                         src="<?php echo $image_url_3; ?>" alt="">
                </div>
            </div>

            <div class="accordion__panel  js-accordion-panel">
                <h2 id="panel5-heading" class="accordion-button">
                    <button class="accordion__trigger  js-accordion-trigger" aria-controls="panel5-content"
                            aria-expanded="false">
                        <?php echo $button_text_4; ?>
                    </button>
                </h2>

                <div class="js-accordion-content" id="panel5-content" aria-labelledby="panel5-heading"
                     aria-hidden="true"
                     role="region">
                    <div class="accordion__content">
                        <h3>
                            <?php echo $subheading_4; ?>
                        </h3>
                        <h1>
                            <?php echo $heading_4; ?>
                        </h1>
                        <p>
                            <?php echo $description_4; ?>
                        </p>
                        <a href="
                            <?php echo $link_url_4; ?>
                        ">
                            <?php echo $link_text_4; ?>
                        </a>
                    </div>
                    <img class="accordion__img" loading="lazy" width="1280" height="720"
                         src="<?php echo $image_url_4; ?>" alt="">
                </div>
            </div>

            <div class="accordion__panel  js-accordion-panel">
                <h2 id="panel5-heading" class="accordion-button">
                    <button class="accordion__trigger  js-accordion-trigger" aria-controls="panel5-content"
                            aria-expanded="false">
                        <?php echo $button_text_5; ?>
                    </button>
                </h2>

                <div class="js-accordion-content" id="panel5-content" aria-labelledby="panel5-heading"
                     aria-hidden="true"
                     role="region">
                    <div class="accordion__content">
                        <h3>
                            <?php echo $subheading_5; ?>
                        </h3>
                        <h1>
                            <?php echo $heading_5; ?>
                        </h1>
                        <p>
                            <?php echo $description_5; ?>
                        </p>
                        <a href="
                            <?php echo $link_url_5; ?>
                        ">
                            <?php echo $link_text_5; ?>
                        </a>
                    </div>
                    <img class="accordion__img" loading="lazy" width="1280" height="720"
                         src="<?php echo $image_url_5; ?>" alt="">
                </div>
            </div>

        </div>
        <style>

            .accordion__img {
                height: 100% !important;
                width: 100% !important;
            }

            .accordion {
                --_button-size: 4.5rem;
                --_button-gap: 1rem;
                --_panel-padding: 0.75rem;
                display: flex;
                flex-direction: column;
                gap: 1px;
                contain: content;
            }

            .accordion {
                flex-direction: row;
                height: 938px;
            }

            .accordion__panel {
                display: grid;
                grid-template-rows: auto 1fr;
                gap: var(--_panel-padding);
                position: relative;
                isolation: isolate;
                overflow: hidden;
                flex-basis: calc(var(--_button-size) + (var(--_panel-padding) * 2));
                padding: var(--_panel-padding);
                padding-inline-end: clamp(0.75rem, -2.063rem+9vw, calc(var(--_panel-padding) * 4));
                cursor: pointer;
                color: hsl(var(--gray-1-hsl));
                border-radius: 0;
                transition: flex-basis 3s, flex-grow 3s;
            }

            .accordion__panel:is(:focus-within) {
                outline: 3px solid hsl(var(--purple-3-hsl));
                outline-offset: 4px;
            }

            .accordion__panel:has([aria-expanded=true]) {
                flex-basis: clamp(16rem, 40vh, 20rem);
                flex-grow: 1;
            }

            .accordion__panel:has([aria-expanded=true]) .accordion__content {
                transform: translateY(0);
                opacity: 1;
                transition: transform 0.5s 0.5s, opacity 0.5s 0.5s;
                margin-left: 70px;
            }

            @supports not selector(:has(*)

            ) {
                .accordion__panel.is-open {
                    flex-basis: clamp(16rem, 40vh, 20rem);
                    flex-grow: 1;
                }

                .accordion__panel.is-open .accordion__content {
                    transform: translateY(0);
                    opacity: 1;
                    transition: transform 0.5s 0.5s, opacity 0.5s 0.5s;
                }

                .accordion__panel.is-open .accordion__img {
                    filter: brightness(0.5);
                }
            }

            .accordion__trigger {
                display: flex;
                align-items: center;
                flex-direction: row-reverse;
                gap: var(--_button-gap);
                inline-size: max-content;
                padding: 0;
                font-size: 1.125rem;
                background-color: transparent;
                outline: 0;
                border: 0;
                color: #fff;
                font-size: 24px;
                font-family: "IvyPresto Headline", Sans-serif;
            }

            .accordion__icon {
                flex-grow: 0;
                flex-shrink: 0;
                padding: 0.5rem;
                width: var(--_button-size);
                aspect-ratio: 1;
                background-color: hsl(var(--gray-9-hsl)/80%);
                border-radius: 50%;
                color: hsl(var(--purple-3-hsl));
                stroke-width: 3;
                stroke-linecap: round;
                z-index: 1;
            }

            .accordion__icon > :first-child {
                transition: opacity 0.5s;
                transition-timing-function: cubic-bezier(0.05, 0.61, 0.41, 0.95);
            }

            [aria-expanded=true] .accordion__icon {
                rotate: 180deg;
                transition: rotate 0.5s;
                transition-timing-function: cubic-bezier(0.05, 0.61, 0.41, 0.95);
            }

            [aria-expanded=true] .accordion__icon > :first-child {
                opacity: 0;
            }

            .accordion__title {
                position: relative;
                isolation: isolate;
                display: grid;
                align-items: center;
                color: hsl(var(--gray-1-hsl));
                font-family: "IvyPresto Headline", Sans-serif;
            }

            .accordion__content {
                padding-inline-start: clamp(0.75rem, -3.313rem+13vw, calc(var(--_button-size) + var(--_button-gap)));
                transform: translateY(calc(var(--_button-size) + var(--_panel-padding)));
                opacity: 0;
            }

            .accordion__content > p {
                font-size: clamp(0.875rem, 0.75rem+0.5vw, 1.125rem);
            }

            .accordion__img {
                position: absolute;
                inset: 0;
                z-index: -1;
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: filter 0.5s;
                transition-timing-function: cubic-bezier(0.05, 0.61, 0.41, 0.95);
            }

            @media (prefers-reduced-motion: reduce) {
                .accordion * {
                    transition: none;
                }
            }

            html {
                box-sizing: border-box;
            }

            *,
            ::after,
            ::before {
                box-sizing: inherit;
            }

            main {
                display: grid;
                gap: 1.5rem;
                grid-template-columns: minmax(0, 1fr);
            }

            .accordion__panel .accordion-button {
                position: absolute;
                bottom: 120px;
                left: -54px;
                transform: rotate(90deg);
            }

            .accordion__panel:nth-child(1) .accordion-button {
                left: -71px;
            }

            .accordion__panel:nth-child(4) .accordion-button {
                left: -64px;
            }

            .accordion__panel:nth-child(5) .accordion-button {
                left: -69px;
            }

            .accordion__panel {
                display: flex;
                align-items: center;
            }

            .js-accordion-content h3 {
                font-size: 18px;
                line-height: 28px;
                color: #000;
                margin-bottom: 12px;
                font-family: "Roboto", Sans-serif;
                font-weight: 400;
                text-transform: uppercase;
            }

            .js-accordion-content h1 {
                font-size: 50px;
                max-width: 300px;
                margin: 0 0 20px 0;
                color: #000;
                font-family: "IvyPresto Headline", Sans-serif;
            }

            .js-accordion-content p {
                font-size: 16px;
                line-height: 28px;
                max-width: 400px;
                color: #000;
                margin: 0;
                font-family: "Roboto", Sans-serif;
            }

            .js-accordion-content a {
                font-size: 24px;
                color: #000;
                margin-top: 30px;
                font-family: "IvyPresto Headline", Sans-serif;
                border-bottom: 2px solid #000;
                display: block;
                width: fit-content;
            }

            @media only screen and (min-width: 992px){
                [aria-expanded="true"] {
                    display: none;
                }

                [aria-expanded="false"] {
                    display: block;
                }
            }

            @media only screen and (max-width: 991px) {
                .js-accordion {
                    display: none;
                }
            }
            .accordion__panel .accordion__trigger::after {
                content: "";
                position: absolute;
                bottom: -26px;
                left: -675px;
                width: 940px;
                height: 104px;
                background: #000000ad;
                z-index: -1;
            }
            .accordion__panel:nth-child(5) .accordion__trigger::after{
                left: -690px;
                bottom: -15px;
            }
            .accordion__panel:nth-child(4) .accordion__trigger::after{
                bottom: -28px;
                left: -679px;
            }
            .accordion__panel:nth-child(3) .accordion__trigger::after{
                bottom: -27pxpx;
                left: -695px;
            }
            .accordion__panel:nth-child(2) .accordion__trigger::after{
                bottom: -28px;
                left: -688px;
            }
        </style>
        <script>
            function toggleAccordion(panelToActivate) {
                const triggerToActivate = panelToActivate.querySelector(".js-accordion-trigger");
                const contentToActivate = panelToActivate.querySelector(".js-accordion-content");

                // Loop through buttons and panels and update their attributes
                buttons.forEach(function (button) {
                    button.setAttribute("aria-expanded", "false");
                });

                panelsContent.forEach(function (content) {
                    content.setAttribute("aria-hidden", "true");
                });

                if (triggerToActivate) {
                    triggerToActivate.setAttribute("aria-expanded", "true");
                }

                if (contentToActivate) {
                    contentToActivate.setAttribute("aria-hidden", "false");
                }

                if (!CSS.supports("selector(:has(*))")) {
                    panels.forEach(function (panel) {
                        panel.classList.remove("is-open");
                    });

                    if (panelToActivate) {
                        panelToActivate.classList.add("is-open");
                    }
                }
            }

            function onButtonClick(e) {
                const activePanel = e.target.closest(".js-accordion-panel");
                if (!activePanel) {
                    return;
                }
                toggleAccordion(activePanel);
            }

            const buttons = document.querySelectorAll(".js-accordion-trigger");
            const panels = document.querySelectorAll(".js-accordion-panel");
            const panelsContent = document.querySelectorAll(".js-accordion-content");

            panels.forEach(function (panel) {
                panel.addEventListener("click", onButtonClick);
            });
        </script>
        <?php
    }

}
