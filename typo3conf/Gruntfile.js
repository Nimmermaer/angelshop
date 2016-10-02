module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            javascript: {
                files: [
                    'ext/angelshop/Resources/Private/Js/scripts.js'
                ],
                tasks: ['jshint'],
                options: {nospawn: true}
            },
            css: {
                files: [
                    'ext/angelshop/Resources/Private/**/*.{less,scss,sass}',
                    'ext/angelshop/Resources/Private/**/*.{less,scss,sass}'
                ],
                tasks: ['less'],
                options: {nospawn: true}
            },
            gruntfile: {
                files: 'Gruntfile.js',
                tasks: ['jshint:gruntfile']
            },
            src: {
                files: [
                    'ext/angelshop/Resources/Private/Js/scripts.js',
                    'ext/angelshop/Resources/Private/**/*.{less,scss,sass}',
                    'ext/angelshop/Resources/Private/**/*.{less,scss,sass}'
                ],
                tasks: ['default']
            }
        },
        jshint: {
            options: {
                bitwise: true,
                browser: true,
                camelcase: true,
                curly: true,
                devel: true,
                eqeqeq: true,
                immed: false,
                jquery: true,
                maxcomplexity: 30,
                maxdepth: 8,
                maxlen: 200,
                maxparams: 5,
                maxstatements: 60,
                newcap: true,
                undef: false,
                unused: false,
                noarg: true,
                nonew: false,
                quotmark: 'single',
                trailing: true,
                white: false,
                globals: ['_', 'jQuery', '$', 'undef']
            },
            all: [
                '!ext/angelshop/Resources/Private/Js/*.js',
                'ext/angelshop/Resources/Private/Js/scripts.js'
            ]
        },
        concat: {
            bootstrap: {
                src: [
                    'ext/angelshop/Resources/Private/Js/bootstrap/transition.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/alert.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/button.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/carousel.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/collapse.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/dropdown.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/modal.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/tooltip.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/popover.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/scrollspy.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/tab.js',
                    'ext/angelshop/Resources/Private/Js/bootstrap/affix.js'
                ],
                dest: 'ext/angelshop/Resources/Public/Js/bootstrap.js'
            },

            custom: {
                src: [
                    'ext/angelshop/Resources/Private/Js/analytics.js',
                    'ext/angelshop/Resources/Private/Js/lightbox.js',
                    'ext/angelshop/Resources/Private/Js/script.js'
                ],
                dest: 'ext/angelshop/Resources/Public/Js/custom.js'
            },
            angelshop: {
                src: [
                    'ext/angelshop/Resources/Private/Js/*.js'
                ],
                dest: 'ext/angelshop/Resources/Public/Js/scripts.js'
            }
        },
        uglify: {
            angelshop: {
                files: {
                    'ext/angelshop/Resources/Public/Js/scripts.min.js': ['ext/angelshop/Resources/Public/Js/scripts.js']
                }
            },
            bootstrap: {
                files: {
                    'ext/angelshop/Resources/Public/Js/bootstrap.min.js': ['ext/angelshop/Resources/Public/Js/bootstrap.js']
                }
            },
            jquery: {
                files: {
                    'ext/angelshop/Resources/Public/Js/jquery.min.js': ['ext/angelshop/Resources/Public/Js/jquery.js']
                }
            },
            custom: {
                files: {
                    'ext/angelshop/Resources/Public/Js/custom.min.js': ['ext/angelshop/Resources/Public/Js/custom.js']
                }
            },
            lightbox: {
                files: {
                    'ext/angelshop/Resources/Public/Js/lightbox.min.js': ['ext/angelshop/Resources/Public/Js/lightbox.js']
                }
            }
        },
        cssmin: {
            compress: {
                files: {
                    'ext/angelshop/Resources/Public/Css/angelshop.min.css': ['ext/angelshop/Resources/Public/Css/angelshop.css']
                }
            }
        },
        sprite: {
            angelshop: {
                src: 'ext/angelshop/Resources/Public/Img/*.png',
                dest: 'ext/angelshop/Resources/Public/Img/spritesheet.png',
                destCss: 'ext/angelshop/Resources/Public/Css/sprites.css'
            }
        },
        less: {
            angelshop: {
                options: {
                    strictMath: true,
                    sourceMap: false,
                    outputSourceFiles: true
                },
                src: 'ext/angelshop/Resources/Private/Less/angelshop.less',
                dest: 'ext/angelshop/Resources/Public/Css/angelshop.css'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    //grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-less');
    //grunt.loadNpmTasks('grunt-spritesmith');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    //grunt.registerTask('default', ['less', 'jshint', 'concat', 'sprite']);
    grunt.registerTask('default', ['less', 'jshint', 'concat', 'cssmin', 'uglify']);
};