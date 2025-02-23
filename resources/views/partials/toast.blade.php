<!-- This is for Toast Message -->
<div id="toast-container" class="fixed bottom-4 right-4 space-y-3 z-50 w-full max-w-xs">
    <!-- Sample Success Toast (will be generated dynamically) -->
    <div class="toast hidden">
        <div class="flex items-center p-4 mb-4 bg-white/95 backdrop-blur-sm border-l-4 border-green-500 text-gray-800 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full opacity-0">
            <div class="flex-shrink-0">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="ml-3 text-sm font-medium flex-grow">Success message</div>
            <button class="ml-2 p-1 hover:bg-gray-100 rounded-full transition-colors">
                <svg class="w-4 h-4 text-gray-500 hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    function showToast(message, type = 'success', duration = 5000) {
        const container = document.getElementById('toast-container');
        const toast = document.createElement('div');

        // Base styling
        toast.className = `flex items-center p-4 mb-4 bg-white/95 backdrop-blur-sm border-l-4 text-gray-800 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full opacity-0 ${
            type === 'success' ? 'border-green-500' :
                type === 'error' ? 'border-red-500' :
                    'border-blue-500'
        }`;

        // Icon
        const icon = type === 'success' ?
            `<svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>` :
            `<svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
        </svg>`;

        toast.innerHTML = `
        ${icon}
        <div class="ml-3 text-sm font-medium flex-grow">${message}</div>
        <button onclick="this.parentElement.remove()" class="ml-2 p-1 hover:bg-gray-100 rounded-full transition-colors">
            <svg class="w-4 h-4 text-gray-500 hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    `;

        container.prepend(toast);

        // Trigger enter animation
        setTimeout(() => {
            toast.classList.remove('translate-x-full', 'opacity-0');
            toast.classList.add('translate-x-0', 'opacity-100');
        }, 10);

        // Auto-remove after duration
        setTimeout(() => {
            toast.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => toast.remove(), 300);
        }, duration);
    }

    // Display session toasts
    @if(session('success'))
    showToast("{{ session('success') }}", 'success');
    @endif
    @if(session('error'))
    showToast("{{ session('error') }}", 'error');
    @endif
</script>
