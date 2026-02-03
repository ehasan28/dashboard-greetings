(function () {
    'use strict';

    var gradients = [
        'linear-gradient(135deg, #f7f8ff, #f2f6ff)',
        'linear-gradient(135deg, #f7fcf9, #eef7f3)',
        'linear-gradient(135deg, #fff8f2, #fff1e6)',
        'linear-gradient(135deg, #f8f7ff, #f0f1ff)',
        'linear-gradient(135deg, #f7fbff, #eef5ff)',
    ];

    function pickRandom(list) {
        return list[Math.floor(Math.random() * list.length)];
    }

    function applyGradient() {
        var widget = document.querySelector('.dg-widget-wrapper');
        if (!widget) {
            return;
        }
        widget.style.background = pickRandom(gradients);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', applyGradient);
    } else {
        applyGradient();
    }
})();
