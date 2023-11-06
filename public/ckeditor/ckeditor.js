CKEDITOR.editorConfig = function (config) {
    // Define custom toolbar groups and styles
    config.toolbarGroups = [
        { name: 'document', groups: ['mode', 'document', 'doctools'] },
        { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
        { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi'] },
        { name: 'styles' },
        { name: 'colors' },
    ];

    // Define a custom skin (e.g., moono-lisa)
    config.skin = 'moono-lisa';

    // Add Word-like styling
    config.stylesSet = 'your_styles_path/styles.js';

    // Enable extra plugins
    config.extraPlugins = 'wordcount,notification';

    // Customize toolbar buttons
    config.removeButtons = 'About,Image';

    // Other custom configurations
};
//php artisan migrate:rollback --batch=1
