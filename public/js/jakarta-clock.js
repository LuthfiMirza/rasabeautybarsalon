/**
 * Jakarta Clock - Real-time Indonesia Jakarta Time
 * Displays current time in Jakarta timezone (WIB - UTC+7)
 */

class JakartaClock {
    constructor(elementId, options = {}) {
        this.element = document.getElementById(elementId);
        this.options = {
            format24: options.format24 || false,
            showSeconds: options.showSeconds !== false,
            showDate: options.showDate !== false,
            showTimezone: options.showTimezone !== false,
            updateInterval: options.updateInterval || 1000,
            locale: options.locale || 'id-ID',
            ...options
        };
        
        if (!this.element) {
            console.error(`Element with ID '${elementId}' not found`);
            return;
        }
        
        this.init();
    }
    
    init() {
        this.updateClock();
        this.startClock();
        this.addStyles();
    }
    
    updateClock() {
        const now = new Date();
        
        // Convert to Jakarta time (UTC+7)
        const jakartaTime = new Date(now.toLocaleString("en-US", {timeZone: "Asia/Jakarta"}));
        
        const timeString = this.formatTime(jakartaTime);
        const dateString = this.formatDate(jakartaTime);
        
        let clockHTML = '';
        
        if (this.options.showDate) {
            clockHTML += `<div class="jakarta-date">${dateString}</div>`;
        }
        
        clockHTML += `<div class="jakarta-time">${timeString}</div>`;
        
        if (this.options.showTimezone) {
            clockHTML += `<div class="jakarta-timezone">WIB (UTC+7)</div>`;
        }
        
        this.element.innerHTML = clockHTML;
    }
    
    formatTime(date) {
        const hours = date.getHours();
        const minutes = date.getMinutes();
        const seconds = date.getSeconds();
        
        if (this.options.format24) {
            // 24-hour format
            const timeStr = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
            return this.options.showSeconds ? `${timeStr}:${seconds.toString().padStart(2, '0')}` : timeStr;
        } else {
            // 12-hour format with AM/PM
            const period = hours >= 12 ? 'PM' : 'AM';
            const displayHours = hours % 12 || 12;
            const timeStr = `${displayHours}:${minutes.toString().padStart(2, '0')}`;
            const fullTime = this.options.showSeconds ? `${timeStr}:${seconds.toString().padStart(2, '0')}` : timeStr;
            return `${fullTime} ${period}`;
        }
    }
    
    formatDate(date) {
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            timeZone: 'Asia/Jakarta'
        };
        
        if (this.options.locale === 'id-ID') {
            // Indonesian format
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            
            const dayName = days[date.getDay()];
            const day = date.getDate();
            const monthName = months[date.getMonth()];
            const year = date.getFullYear();
            
            return `${dayName}, ${day} ${monthName} ${year}`;
        } else {
            // English format
            return date.toLocaleDateString('en-US', options);
        }
    }
    
    startClock() {
        this.clockInterval = setInterval(() => {
            this.updateClock();
        }, this.options.updateInterval);
    }
    
    stopClock() {
        if (this.clockInterval) {
            clearInterval(this.clockInterval);
        }
    }
    
    addStyles() {
        if (document.getElementById('jakarta-clock-styles')) return;
        
        const styles = `
            <style id="jakarta-clock-styles">
                .jakarta-clock {
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    text-align: center;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    color: white;
                    padding: 20px;
                    border-radius: 15px;
                    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                    backdrop-filter: blur(10px);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    max-width: 400px;
                    margin: 0 auto;
                }
                
                .jakarta-date {
                    font-size: 1.1rem;
                    font-weight: 500;
                    margin-bottom: 10px;
                    opacity: 0.9;
                    letter-spacing: 0.5px;
                }
                
                .jakarta-time {
                    font-size: 2.5rem;
                    font-weight: 700;
                    margin: 15px 0;
                    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
                    letter-spacing: 2px;
                    font-family: 'Courier New', monospace;
                }
                
                .jakarta-timezone {
                    font-size: 0.9rem;
                    font-weight: 400;
                    opacity: 0.8;
                    margin-top: 10px;
                    letter-spacing: 1px;
                }
                
                /* Responsive Design */
                @media (max-width: 768px) {
                    .jakarta-clock {
                        padding: 15px;
                        margin: 10px;
                    }
                    
                    .jakarta-time {
                        font-size: 2rem;
                        letter-spacing: 1px;
                    }
                    
                    .jakarta-date {
                        font-size: 1rem;
                    }
                    
                    .jakarta-timezone {
                        font-size: 0.8rem;
                    }
                }
                
                @media (max-width: 480px) {
                    .jakarta-time {
                        font-size: 1.8rem;
                    }
                    
                    .jakarta-date {
                        font-size: 0.9rem;
                    }
                }
                
                /* Animation */
                .jakarta-clock {
                    animation: fadeIn 0.5s ease-in;
                }
                
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(20px); }
                    to { opacity: 1; transform: translateY(0); }
                }
                
                /* Alternative Themes */
                .jakarta-clock.theme-dark {
                    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
                }
                
                .jakarta-clock.theme-pink {
                    background: linear-gradient(135deg, #F987C4 0%, #ff9fd4 100%);
                }
                
                .jakarta-clock.theme-minimal {
                    background: rgba(255, 255, 255, 0.1);
                    backdrop-filter: blur(20px);
                    border: 1px solid rgba(255, 255, 255, 0.3);
                }
                
                .jakarta-clock.theme-neon {
                    background: #000;
                    border: 2px solid #00ff00;
                    box-shadow: 0 0 20px #00ff00;
                }
                
                .jakarta-clock.theme-neon .jakarta-time {
                    color: #00ff00;
                    text-shadow: 0 0 10px #00ff00;
                }
            </style>
        `;
        
        document.head.insertAdjacentHTML('beforeend', styles);
    }
    
    // Public methods
    setTheme(theme) {
        this.element.className = `jakarta-clock theme-${theme}`;
    }
    
    setFormat(format24) {
        this.options.format24 = format24;
        this.updateClock();
    }
    
    toggleSeconds() {
        this.options.showSeconds = !this.options.showSeconds;
        this.updateClock();
    }
    
    setLocale(locale) {
        this.options.locale = locale;
        this.updateClock();
    }
}

// Auto-initialize if element exists
document.addEventListener('DOMContentLoaded', function() {
    const clockElement = document.getElementById('jakarta-clock');
    if (clockElement) {
        window.jakartaClock = new JakartaClock('jakarta-clock');
    }
});

// Export for module use
if (typeof module !== 'undefined' && module.exports) {
    module.exports = JakartaClock;
}