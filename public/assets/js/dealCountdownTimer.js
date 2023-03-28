
class DealCountdownTimer {
    // setup timer values
    constructor({id, targetDate}) {
        this.id = id;
        this.targetDate = targetDate;
    }

    getTimeRemaining(endTime) {
        const total = Date.parse(endTime) - Date.parse(new Date());
        const days = Math.floor(total / (1000 * 60 * 60 * 24));
        const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
        const mins = Math.floor((total / 1000 / 60) % 60);
        const secs = Math.floor((total / 1000) % 60);
        return {
            total,
            days,
            hours,
            mins,
            secs,
        };
    }

    updateTimer({days,  hours, mins, secs }) {
        document.getElementById(this.id).innerHTML = `${days}:${hours}:${mins}:${secs}`;
    }


    startTimer() {
        const timer = this.getTimeRemaining(this.targetDate);
        this.updateTimer(timer);
        setInterval(() => {
            const timer = this.getTimeRemaining(this.targetDate);
            this.updateTimer(timer);
        }, 1000);
    }
}
