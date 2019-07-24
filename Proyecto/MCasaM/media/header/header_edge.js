/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "6.0.0",
                minimumCompatibleVersion: "5.0.0",
                build: "6.0.0.400",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'Text',
                            type: 'text',
                            rect: ['-89.5%', '23.6%', '84.4%', '52.9%', 'auto', 'auto'],
                            overflow: 'hidden',
                            text: "<p style=\"margin: 0px; text-indent: 0%; text-align: center;\">​<span style=\"font-size: 2.2em; font-family: 'Times New Roman', Times, serif; color: rgb(39, 18, 185); word-spacing: 0em; letter-spacing: 0em;\">Mueblería Casa Morales</span></p>",
                            font: ['Tahoma, Geneva, sans-serif', [24, ""], "rgba(0,0,0,1)", "900", "none", "italic", "break-word", "normal"],
                            textStyle: ["", "", "", "", "capitalize"],
                            transform: [[],[],[],['1.0606','1.05405']]
                        },
                        {
                            id: 'logo',
                            type: 'image',
                            rect: ['260px', '0px', '147px', '140px', 'auto', 'auto'],
                            opacity: '0.014388489536941051',
                            fill: ["rgba(0,0,0,0)",im+"logo.png",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: [undefined, undefined, '100%', '100%'],
                            sizeRange: ['0%','','',''],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,1.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 8000,
                    autoPlay: true,
                    data: [
                        [
                            "eid1",
                            "left",
                            0,
                            7000,
                            "linear",
                            "${Text}",
                            '-89.54%',
                            '102.62%'
                        ],
                        [
                            "eid4",
                            "opacity",
                            5000,
                            3000,
                            "linear",
                            "${logo}",
                            '0.014388',
                            '1'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("header_edgeActions.js");
})("EDGE-17703800");
