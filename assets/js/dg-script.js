(function () {
    'use strict';

    var gradients = [
        'linear-gradient(135deg, #ffe6e6, #fff3da)',
        'linear-gradient(135deg, #ffe9d6, #fff6d7)',
        'linear-gradient(135deg, #fff0cc, #f9ffe1)',
        'linear-gradient(135deg, #e7f6d5, #d7f0c5)',
        'linear-gradient(135deg, #e1f7ea, #d9f3ef)',
        'linear-gradient(135deg, #e1fbf8, #eee6f7)',
        'linear-gradient(135deg, #e5f5ff, #dfeef8)',
        'linear-gradient(135deg, #e9f2ff, #f3e9ff)',
        'linear-gradient(135deg, #f2e6ff, #eee3ff)',
        'linear-gradient(135deg, #ffe7f4, #fff0f6)',
        'linear-gradient(135deg, #fff5e6, #ffe9dc)',
        'linear-gradient(135deg, #fff1e3, #ffe9e1)',
        'linear-gradient(135deg, #f9e9ff, #e9f0ff)',
        'linear-gradient(135deg, #eaf2ff, #e9f7ff)',
        'linear-gradient(135deg, #e7fff1, #e8f6ff)',
        'linear-gradient(135deg, #f1f5f8, #f7fafc)',
        'linear-gradient(135deg, #effff5, #fff6e3)',
        'linear-gradient(135deg, #fff6da, #ffe9b8)',
        'linear-gradient(135deg, #ffeccf, #fff3d9)',
        'linear-gradient(135deg, #ffe8ef, #ffeedd)',
    ];

    function pickRandom(list) {
        return list[Math.floor(Math.random() * list.length)];
    }

    function applyGradient() {
        var widgetInside = document.querySelector('#dg_motivation_widget .inside');
        var widgetHeader = document.querySelector('#dg_motivation_widget .postbox-header');
        if (!widgetInside && !widgetHeader) {
            return;
        }
        var gradient = pickRandom(gradients);
        if (widgetInside) {
            widgetInside.style.background = gradient;
        }
        if (widgetHeader) {
            widgetHeader.style.background = gradient;
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', applyGradient);
    } else {
        applyGradient();
    }
})();
