/**
 * Created by Q-Solutions Studio
 *
 * @category    Qoliber
 * @package     Qoliber_SessionTimeoutPopup
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */
define([
    'jquery',
    'ko'
], function ($, ko) {
    'use strict';

    return {
        timeLeft: ko.observable(null),
        sessionTimedOut: ko.observable(false),

        initializeTimer: function (totalTime) {
            this.timeLeft(totalTime);
            let interval = setInterval(function () {
                this.timeLeft(this.timeLeft() - 1);

                if (this.timeLeft() <= 0) {
                    this.sessionTimedOut(true);
                    clearInterval(interval);
                }
            }.bind(this), 1000);
        }
    };
});
