tinymce.PluginManager.add('rnrShortcodes', function(ed, url) {

    // Add a button that opens a window
    ed.addButton('rnr_button', {
        type: 'splitbutton',
        text: '',
        icon: 'rnrscg',
        tooltip: 'RockNRolla Shortcodes',        
        menu:   [

                    {
                        text: 'Accordions',
                        onclick: function() {
                            ed.insertContent('[accordion]<br>\
                                        [accordion_item title=\"First Accordion Title\"]Accordion Content Here[/accordion_item]<br>\
                                        [accordion_item title=\"Second Accordion Title\"]Accordion Content Here[/accordion_item]<br>\
                                        [accordion_item title=\"Third Accordion Title\"]Accordion Content Here[/accordion_item]<br>\
                                        [/accordion]');
                        }
                    },
                    {
                        text: 'Buttons',
                        onclick: function() {
                            ed.insertContent('[button link_url=\"http://\" title=\"Button Title\" scroll=\"true or false, to scroll to any section in current page\" target=\"_blank or _self\" lightbox=\"true or false, to open video links in  lightbox, link in link_url\" color=\"change the text color of your button by adding hexcodes, #000000\" background=\"change background color for button with hex codes, #ffd600\"]');
                        }
                    },

                    // Boxes Array
                    {
                        text: 'Boxes',
                        menu: [
                                {
                                    text: 'Alert Box',
                                    onclick: function() {
                                        ed.insertContent('[alert_box message=\"YOUR MESSAGE HERE\" type=\"notice,warning,success,error,info\"]');
                                    }
                                },                  
                                {
                                    text: 'Callout Box',
                                    onclick: function() {
                                        ed.insertContent('[callout title=\"CALLOUT TITLE HERE\" btn_title=\"BUTTON TITLE HERE\" btn_url=\"BUTTON URL LINK HERE(Ex:http://)\"]YOUR CALLOUT DESCRIPTION COMES HERE![/callout]');
                                    }
                                },                  
                                {
                                    text: 'Blog Posts',
                                    onclick: function() {
                                        ed.insertContent('[blog posts=\"10\" columns=\"2 or 3 or 4\" title=\"Recent Posts Title\" show_title=\"true\" categories=\"all or category_id\" excerpt_size=\"10\"]');
                                    }
                                },
                                {
                                    text: 'Clents Box',
                                    onclick: function() {
                                        ed.insertContent('[clients_box]<br>\
                                                    [client logo=\"CLIENT LOGO LINK HERE\" url=\"#\" title=\"Client Title Here\"]<br>\
                                                    [client logo=\"CLIENT LOGO LINK HERE\" url=\"#\" title=\"Client Title Here\"]<br>\
                                                    [client logo=\"CLIENT LOGO LINK HERE\" url=\"#\" title=\"Client Title Here\"]<br>\
                                                    [client logo=\"CLIENT LOGO LINK HERE\" url=\"#\" title=\"Client Title Here\"]<br>\
                                                    [client logo=\"CLIENT LOGO LINK HERE\" url=\"#\" title=\"Client Title Here\"]<br>\
                                                    [client logo=\"CLIENT LOGO LINK HERE\" url=\"#\" title=\"Client Title Here\"]<br>\
                                                    [client logo=\"CLIENT LOGO LINK HERE\" url=\"#\" title=\"Client Title Here\"]<br>\
                                                    [client logo=\"CLIENT LOGO LINK HERE\" url=\"#\" title=\"Client Title Here\"]<br>\
                                                    [/clients_box]');
                                    }
                                },
                                {
                                    text: 'Contact Box',
                                    onclick: function() {
                                        ed.insertContent('[contact_box email=\"emailaddress@site.com\" telephone=\"123-456-7890\" address=\"Envato, Melbourner, AU\"]');
                                    }
                                },          
                                {
                                    text: 'Full Width Color Box',
                                    onclick: function() {
                                        ed.insertContent('[full_width_color bg_color=\"#EFEFEF\" color=\"#333333\"]Your Content Here[/full_width_color]');
                                    }
                                },          
                                {
                                    text: 'Full Width Image Box',
                                    onclick: function() {
                                        ed.insertContent('[full_width_image bg_url=\"set background image or pattern\" type=\"image or pattern\"]Your Content Here[/full_width_image]');
                                    }
                                },
                                {
                                    text: 'Icon Box',
                                    onclick: function() {
                                        ed.insertContent('[icon_box icon=\"fa-class or Icon image URL\" title=\"Service Box Title Here\" icon_type=\"image or fa-font\"]Give icon={icon class name from Font Awesome List} for icon_type={fa-font} and icon={htttp:// iconimageurl} for icon_type={image}[/icon_box]');
                                    }
                                },
                                {
                                    text: 'Milestone Box',
                                    onclick: function() {
                                        ed.insertContent('[milestone_box count=\"500\" title=\"Pizzas\"]');
                                    }
                                },          
                                {
                                    text: 'Parallax Quote',
                                    onclick: function() {
                                        ed.insertContent('[parallax_quote author=\"John Doe\"]Your Quote Here[/parallax_quote]');
                                    }
                                },
                                {
                                    text: 'Service Box',
                                    onclick: function() {
                                        ed.insertContent('[service_box icon=\"fa-class\" title=\"Service Box Title Here\"]Give icon={icon class name from Font Awesome List}[/service_box]');
                                    }
                                },
                                {
                                    text: 'Tweet Box',
                                    onclick: function() {
                                        ed.insertContent('[parallax_twitter count=\"5\" title=\"Follow us on Twitter\"]');
                                    }
                                },
                        ]
                    },
                    // Columns Array
                    {
                        text: 'Columns',
                        menu: [
                                {
                                    text: 'One Half',
                                    onclick: function() {
                                        ed.insertContent('[one_half]Your Content Here[/one_half]');
                                    }
                                },
                                {
                                    text: 'One Half Last',
                                    onclick: function() {
                                        ed.insertContent('[one_half_last]Your Content Here[/one_half_last]');
                                    }
                                },
                                {
                                    text: 'One Third',
                                    onclick: function() {
                                        ed.insertContent('[one_third]Your Content Here[/one_third]');
                                    }
                                },
                                {
                                    text: 'One Third Last',
                                    onclick: function() {
                                        ed.insertContent('[one_third_last]Your Content Here[/one_third_last]');
                                    }
                                },
                                {
                                    text: 'One Fourth',
                                    onclick: function() {
                                        ed.insertContent('[one_fourth]Your Content Here[/one_fourth]');
                                    }
                                },
                                {
                                    text: 'One Fourth Last',
                                    onclick: function() {
                                        ed.insertContent('[one_fourth_last]Your Content Here[/one_fourth_last]');
                                    }
                                },
                                {
                                    text: 'One Fifth',
                                    onclick: function() {
                                        ed.insertContent('[one_fifth]Your Content Here[/one_fifth]');
                                    }
                                },
                                {
                                    text: 'One Fifth Last',
                                    onclick: function() {
                                        ed.insertContent('[one_fifth_last]Your Content Here[/one_fifth_last]');
                                    }
                                },
                                {
                                    text: 'One Sixth',
                                    onclick: function() {
                                        ed.insertContent('[one_sixth]Your Content Here[/one_sixth]');
                                    }
                                },
                                {
                                    text: 'One Sixth Last',
                                    onclick: function() {
                                        ed.insertContent('[one_sixth_last]Your Content Here[/one_sixth_last]');
                                    }
                                },
                                {
                                    text: 'Two Third',
                                    onclick: function() {
                                        ed.insertContent('[two_third]Your Content Here[/two_third]');
                                    }
                                },
                                {
                                    text: 'Two Third Last',
                                    onclick: function() {
                                        ed.insertContent('[two_third_last]Your Content Here[/two_third_last]');
                                    }
                                },
                                {
                                    text: 'Two Fifth',
                                    onclick: function() {
                                        ed.insertContent('[two_fifth]Your Content Here[/two_fifth]');
                                    }
                                },
                                {
                                    text: 'Two Fifth Last',
                                    onclick: function() {
                                        ed.insertContent('[two_fifth_last]Your Content Here[/two_fifth_last]');
                                    }
                                },
                                {
                                    text: 'Three Fourth',
                                    onclick: function() {
                                        ed.insertContent('[three_fourth]Your Content Here[/three_fourth]');
                                    }
                                },
                                {
                                    text: 'Three Fourth Last',
                                    onclick: function() {
                                        ed.insertContent('[three_fourth_last]Your Content Here[/three_fourth_last]');
                                    }
                                },                  
                                {
                                    text: 'Three Fifth',
                                    onclick: function() {
                                        ed.insertContent('[three_fifth]Your Content Here[/three_fifth]');
                                    }
                                },
                                {
                                    text: 'Three Fifth Last',
                                    onclick: function() {
                                        ed.insertContent('[three_fifth_last]Your Content Here[/three_fifth_last]');
                                    }
                                },              
                                {
                                    text: 'Four Fifth',
                                    onclick: function() {
                                        ed.insertContent('[four_fifth]Your Content Here[/four_fifth]');
                                    }
                                },
                                {
                                    text: 'Four Fifth Last',
                                    onclick: function() {
                                        ed.insertContent('[four_fifth_last]Your Content Here[/four_fifth_last]');
                                    }
                                },                  
                                {
                                    text: 'Five Sixth',
                                    onclick: function() {
                                        ed.insertContent('[five_sixth]Your Content Here[/five_sixth]');
                                    }
                                },
                                {
                                    text: 'Five Sixth Last',
                                    onclick: function() {
                                        ed.insertContent('[five_sixth_last]Your Content Here[/five_sixth_last]');
                                    }
                                }
                        ]
                    },

                    // Google Maps 
                    // Single Item
                    {
                        text: 'Google Map',
                        onclick: function() {
                            ed.insertContent('[map url=\"GOOGLEMAP_URL_HERE\" width=\"100%\" height=\"330px\"]');
                        }
                    },

                    // Home Variations Array
                    {
                        text: 'Home Variations',
                        menu: [
                                {
                                    text: 'Home Circular Quote',
                                    onclick: function() {
                                        ed.insertContent('[home_circle_callout]<br>\
                                        [home_circle_callout_line]DESIGNERS ARE MEANT TO BE LOVED,[/home_circle_callout_line]<br>\
                                        [home_circle_callout_line highlight=\"true\"]NOT TO BE UNDERSTOOD[/home_circle_callout_line]<br>\
                                        [home_circle_callout_line]AND THEY ARE THE BEST[/home_circle_callout_line]<br>\
                                        [home_circle_callout_line]THAT\'S WHY![/home_circle_callout_line]<br>\
                                        [/home_circle_callout]');
                                    }
                                },

                                {
                                    text: 'Home Quote',
                                    onclick: function() {
                                        ed.insertContent('[home_callout]<br>\
                                        [home_callout_line]Creativity always bleeds[/home_callout_line]<br>\
                                        [home_callout_line bg_highlight=\"true\"]from the touch[/home_callout_line]<br>\
                                        [home_callout_line]of inspiration[/home_callout_line]<br>\
                                        [/home_callout]');
                                    }
                                },

                                {
                                    text: 'Home Quote 2',
                                    onclick: function() {
                                        ed.insertContent('[home_callout2]<br>\
                                        [home_callout2_line]DESIGNERS ARE MEANT TO BE LOVED,[/home_callout2_line]<br>\
                                        [home_callout2_line bg_highlight=\"true\"]NOT TO BE UNDERSTOOD[/home_callout2_line]<br>\
                                        [/home_callout2]');
                                    }
                                },

                                {
                                    text: 'Home Text Slider',
                                    onclick: function() {
                                        ed.insertContent('[home_textslides]<br>\
                                        [textslide]WE ARE [highlight]CRAZY[/highlight] CODERS[/textslide]<br>\
                                        [textslide]WE [highlight]LOVE[/highlight] PIZZAS[/textslide]<br>\
                                        [textslide]WE ARE [highlight]CREATIVE[/highlight] NERDS[/textslide]<br>\
                                        [/home_textslides]');
                                    }
                                }
                            
                        ]
                    },

                    // Single Items
                    {
                        text: 'Image Slider',
                        onclick: function() {
                            ed.insertContent('[image_slider]<br>\
                                        [image_slide url=\"ANCHOR_LINK_HERE\" image_url=\"IMAGE_URL_HERE\" lightbox=\"true or false\"]<br>\
                                        [image_slide url=\"ANCHOR_LINK_HERE\" image_url=\"IMAGE_URL_HERE\" lightbox=\"true or false\"]<br>\
                                        [image_slide url=\"ANCHOR_LINK_HERE\" image_url=\"IMAGE_URL_HERE\" lightbox=\"true or false\"]<br>\
                                        [/image_slider]');
                        }
                    },
                    {
                        text: 'Pricing Table',
                        onclick: function() {
                            ed.insertContent('[pricing-table col=\"4\"]<br>\
[plan name=\"Small Edition\" link=\"http://www.google.de\" linkname=\"Sign Up\" price=\"10$\" per=\"per year\"]<br>\
<ul><li><strong>Free</strong> Setup</li><li><strong>10GB</strong> Storage</li><li><strong>100GB</strong> Bandwith</li><li><strong>5</strong> Products</li><li><strong>Basic</strong> Stats</li><li><strong>Basic</strong> Customization</li></ul><br>\
[/plan]<br>\
[plan name=\"Develper Edition\" link=\"http://www.google.de\" linkname=\"Sign Up\" price=\"19$\" per=\"per month\"]<br>\
<ul><li><strong>Free</strong> Setup</li><li><strong>20GB</strong> Storage</li><li><strong>200GB</strong> Bandwith</li><li><strong>25</strong> Products</li><li><strong>Basic</strong> Stats</li><li><strong>Basic</strong> Customization</li></ul><br>\
[/plan]<br>\
[plan name=\"Featured Edition\" link=\"http://www.google.de\" linkname=\"Sign Up\" price=\"29$\" per=\"per month\" featured=\"true\"]<br>\
<ul><li><strong>Free</strong> Setup</li><li><strong>40GB</strong> Storage</li><li><strong>500GB</strong> Bandwith</li><li><strong>100</strong> Products</li><li><strong>Complex</strong> Stats</li><li><strong>Complex</strong> Customization</li></ul><br>\
[/plan]<br>\
[plan name=\"Professional Edition\" link=\"http://www.google.de\" linkname=\"Sign Up\" price=\"49$\" per=\"month\"]<br>\
<ul><li><strong>Free</strong> Setup</li><li><strong>100GB</strong> Storage</li><li><strong>1000GB</strong> Bandwith</li><li><strong>Unlimited</strong> Products</li><li><strong>Complex</strong> Stats</li><li><strong>Complex</strong> Customization</li></ul><br>\
[/plan]<br>\
[/pricing-table]');
                        }
                    },          
                    {
                        text: 'Social Sharing',
                        onclick: function() {
                            ed.insertContent('[social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"]');
                        }
                    },
                    {
                        text: 'Tabs',
                        onclick: function() {
                            ed.insertContent('[tabgroup]<br>\
                                        [tab title=\"Tab Title Here\"]Tabs Content Here[/tab]<br>\
                                        [tab icon=\"fa-home(Check Font awesomes for Icon Class Names)\"]Tabs Content Here[/tab]<br>\
                                        [tab title=\"Tab Title Here\" icon=\"fa-home(Check Font awesomes for Icon Class Names)\"]Tabs Content Here[/tab]<br>\
                                        [/tabgroup]');
                    }
                    },
                    {
                        text: 'Testimonial Slider',
                        onclick: function() {
                            ed.insertContent('[testimonial_slider_box]<br>\
                                        [testimonial_slide author=\"Client Name Here\"]Testimonial Here[/testimonial_slide]<br>\
                                        [testimonial_slide author=\"Client Name Here\"]Testimonial Here[/testimonial_slide]<br>\
                                        [testimonial_slide author=\"Client Name Here\"]Testimonial Here[/testimonial_slide]<br>\
                                        [testimonial_slide author=\"Client Name Here\"]Testimonial Here[/testimonial_slide]<br>\
                                        [testimonial_slide author=\"Client Name Here\"]Testimonial Here[/testimonial_slide]<br>\
                                        [testimonial_slide author=\"Client Name Here\"]Testimonial Here[/testimonial_slide]<br>\
                                        [testimonial_slide author=\"Client Name Here\"]Testimonial Here[/testimonial_slide]<br>\
                                        [testimonial_slide author=\"Client Name Here\"]Testimonial Here[/testimonial_slide]<br>\
                                        [/testimonial_slider_box]');
                        }
                    },
                    {
                        text: 'Team Member',
                        onclick: function() {
                            ed.insertContent('[team_member img=\"IMAGE_LINK_HERE\" name=\"MEMBER_NAME\" role=\"MEMBER_ROLE\" viewprofile=\"yes or no\" link_title=\"View Profile\" size=\"one or two or three or four\"]TEAM MEMBER DESCRIPTION HERE[/team_member]');
                        }
                    },
                    {
                        text: 'Toggles',
                        onclick: function() {
                            ed.insertContent('[toggle title=\"First Toggle Title\" open=\"0\"]YOUR TOGGLE CONTENT HERE![/toggle]<br>\
                                    [toggle title=\"Second Toggle Title(Open by Default)\" open=\"1\"]YOUR TOGGLE CONTENT HERE![/toggle]<br>\
                                    [toggle title=\"Third Toggle Title\" open=\"0\"]YOUR TOGGLE CONTENT HERE![/toggle]');
                    }
                    },
                    

                    // Typo Elements Array
                    {
                        text: 'Typo Elements',
                        menu: [
                            {
                                text: 'Fancy Header', 
                                onclick: function() {
                                    ed.insertContent('[fancy_header type=\"1 or 2 or 3\" subtitle=\"for type=2\"]Your Fancy Header Title Here![/fancy_header]');
                                }
                            },
                            {
                                text: 'Pullquote', 
                                onclick: function() {
                                    ed.insertContent('[pullquote align=\"left or right\"]Your Pullquote Text Here![/pullquote]');
                                }
                            },
                            {
                                text: 'BlockQuote', 
                                onclick: function() {
                                    ed.insertContent('[blockquote]Your Blockquote Text Here![/blockquote]');
                                }
                            },
                            {
                                text: 'Lists', 
                                onclick: function() {
                                    ed.insertContent('[list]<br>\
                                        [list_item icon=\"fa-home(Check Font awesomes for Icon Class Names)\" color=\"#ffd600\"]List Item text here[/list_item]<br>\
                                        [list_item icon=\"fa-home(Check Font awesomes for Icon Class Names)\" color=\"#ffd600\"]List Item text here[/list_item]<br>\
                                        [list_item icon=\"fa-home(Check Font awesomes for Icon Class Names)\" color=\"#ffd600\"]List Item text here[/list_item]<br>\
                                        [list_item icon=\"fa-home(Check Font awesomes for Icon Class Names)\" color=\"#ffd600\"]List Item text here[/list_item]<br>\
                                        [list_item icon=\"fa-home(Check Font awesomes for Icon Class Names)\" color=\"#ffd600\"]List Item text here[/list_item]<br>\
                                        [/list]');
                                }
                            },
                            {
                                text: 'Skill Bar', 
                                onclick: function() {
                                    ed.insertContent('[skill_bar percentage=\"50\" title=\"Web Design\"]<br>\
                                            [skill_bar percentage=\"30\" title=\"UX Design\"]<br>\
                                            [skill_bar percentage=\"80\" title=\"Brand Package\"]<br>\
                                            [skill_bar percentage=\"70\" title=\"WordPress\"]');
                                }
                            }
                        ]
                    },

                    // Utilities Array
                    {
                        text: 'Utilities',
                        menu: [
                            {
                                text: 'Break',
                                onclick: function() {
                                    ed.insertContent('[br]');
                                }
                            },
                            {
                                text: 'Center',
                                onclick: function() {
                                    ed.insertContent('[center]');
                                }
                            },
                            {
                                text: 'Clear',
                                onclick: function() {
                                    ed.insertContent('[clear]');
                                }
                            },  
                            {
                                text: 'Highlight',
                                onclick: function() {
                                    ed.insertContent('[highlight]');
                                }
                            },
                            {
                                text: 'Space',
                                onclick: function() {
                                    ed.insertContent('[space]');
                                }
                            }
                        ]
                    },

                    // Single Items
                    {
                        text: 'Video',
                        onclick: function() {
                            ed.insertContent('[video type=\"youtube,vimeo\" id=\"YOUTUBE_ID or VIMEO_ID here\" autoplay=\"yes,no\"]');
                        }
                    }

                ],

    });

});


