<div x-data="{ width: 'md' }">
    <div
        x-bind:class="{
            '-mt-16 w-screen space-y-8 px-6 md:mt-0 md:px-2': true,
            'max-w-xs': width === 'xs',
            'max-w-sm': width === 'sm',
            'max-w-md': width === 'md',
            'max-w-lg': width === 'lg',
            'max-w-xl': width === 'xl',
            'max-w-2xl': width === '2xl',
            'max-w-3xl': width === '3xl',
            'max-w-4xl': width === '4xl',
            'max-w-5xl': width === '5xl',
            'max-w-6xl': width === '6xl',
            'max-w-7xl': width === '7xl',
        }"
    >
        <!-- Your content here -->
    </div>
</div>
