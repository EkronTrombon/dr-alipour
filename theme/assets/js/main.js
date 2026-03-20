/**
 * Dr. Alipour Theme - Main JavaScript with Alpine.js
 *
 * @package dr-alipour
 */

// Wait for Alpine.js to be loaded before initializing
document.addEventListener('alpine:init', () => {
    console.log('Dr. Alipour Theme Initialized with Alpine.js');
});

// Global Alpine components and utilities
window.drAlipourTheme = {
    /**
     * Accordion component
     */
    accordion() {
        return {
            open: false,
            toggle() {
                this.open = !this.open;
            },
            close() {
                this.open = false;
            },
        };
    },

    /**
     * Mobile menu component
     */
    mobileMenu() {
        return {
            isOpen: false,
            toggle() {
                this.isOpen = !this.isOpen;
            },
            close() {
                this.isOpen = false;
            },
        };
    },

    /**
     * Form submission handler
     */
    handleFormSubmit(event) {
        event.preventDefault();
        console.log('Form submitted');
        // Add form submission logic here
    },

    /**
     * Smooth scroll to element
     */
    smoothScroll(elementId) {
        const element = document.getElementById(elementId);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    },

    /**
     * Toggle class on element
     */
    toggleClass(element, className) {
        if (element) {
            element.classList.toggle(className);
        }
    },

    /**
     * Fetch and display content (for AJAX)
     */
    async fetchContent(url) {
        try {
            const response = await fetch(url);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return await response.text();
        } catch (error) {
            console.error('Fetch error:', error);
        }
    },
};

// Expose components globally for use in Alpine.js attributes
window.drAlipour = {
    accordion: window.drAlipourTheme.accordion(),
    mobileMenu: window.drAlipourTheme.mobileMenu(),
    smoothScroll: window.drAlipourTheme.smoothScroll,
    toggleClass: window.drAlipourTheme.toggleClass,
    fetchContent: window.drAlipourTheme.fetchContent,
};
