<?php

/**
 * Anyo at Disenyo — content shape.
 *
 * Public URLs come from collection routes. The list path is the route minus
 * the trailing /{slug}; the show path is the full route. We use list paths
 * to serve hardcoded landing pages (Work / Studio / Contact) until the
 * client populates real entries from /admin.
 */

return [

    // ---------------------------------------------------------------
    // Projects — case studies of completed work.
    // List path: /work  →  work.twig (currently a hand-written index)
    // Show path: /work/{slug}  →  project.twig (live once entries exist)
    // ---------------------------------------------------------------
    'projects' => [
        'label'          => 'Projects',
        'label_singular' => 'Project',
        'icon'           => 'layers',
        'route'          => '/work/{slug}',
        'template'       => 'project.twig',
        'list_template'  => 'work.twig',
        'order_by'       => 'updated_at DESC',
        'list_limit'     => 100,
        'fields' => [
            'title'        => ['type' => 'text',     'required' => true,  'label' => 'Project name'],
            'slug'         => ['type' => 'slug',     'required' => true,  'label' => 'Slug'],
            'location'     => ['type' => 'text',     'required' => true,  'label' => 'Location', 'help' => 'e.g. Batangas City'],
            'year'         => ['type' => 'number',   'required' => true,  'label' => 'Year completed'],
            'scope'        => ['type' => 'text',     'required' => true,  'label' => 'Scope', 'help' => 'e.g. Architecture, Interiors'],
            'status'       => ['type' => 'select',   'required' => true,  'label' => 'Status', 'options' => ['Completed', 'In progress', 'Concept']],
            'area_sqm'     => ['type' => 'number',                         'label' => 'Floor area (sqm)'],
            'cover_image'  => ['type' => 'url',      'required' => true,  'label' => 'Cover image URL', 'help' => 'Paste from /admin/media'],
            'gallery'      => ['type' => 'textarea',                      'label' => 'Gallery image URLs', 'help' => 'One URL per line.'],
            'excerpt'      => ['type' => 'textarea', 'required' => true,  'label' => 'One-line descriptor'],
            'body'         => ['type' => 'markdown', 'required' => true,  'label' => 'Narrative'],
            'featured'     => ['type' => 'boolean',                       'label' => 'Featured on home'],
            'order'        => ['type' => 'number',                        'label' => 'Manual sort order'],
        ],
    ],

    // ---------------------------------------------------------------
    // Pages — for the principal to add longer pieces later (CV,
    // press, awards). Routed at /{slug}; only renders when an entry
    // with that slug is published.
    // ---------------------------------------------------------------
    'pages' => [
        'label'          => 'Pages',
        'label_singular' => 'Page',
        'icon'           => 'file',
        'route'          => '/{slug}',
        'template'       => 'page.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title'            => ['type' => 'text',     'required' => true, 'label' => 'Title'],
            'slug'             => ['type' => 'slug',     'required' => true, 'label' => 'Slug'],
            'body'             => ['type' => 'markdown',                     'label' => 'Body'],
            'meta_description' => ['type' => 'textarea',                     'label' => 'Meta description'],
        ],
    ],

    // ---------------------------------------------------------------
    // Posts — kept for a future journal. Unused on launch.
    // ---------------------------------------------------------------
    'posts' => [
        'label'          => 'Journal',
        'label_singular' => 'Entry',
        'icon'           => 'edit',
        'route'          => '/journal/{slug}',
        'template'       => 'post.twig',
        'list_template'  => 'post-list.twig',
        'order_by'       => 'publish_at DESC',
        'fields' => [
            'title'   => ['type' => 'text',     'required' => true, 'label' => 'Title'],
            'slug'    => ['type' => 'slug',     'required' => true, 'label' => 'Slug'],
            'excerpt' => ['type' => 'textarea', 'label' => 'Excerpt'],
            'body'    => ['type' => 'markdown', 'required' => true, 'label' => 'Body'],
            'author'  => ['type' => 'text',     'label' => 'Author'],
        ],
    ],

    // ---------------------------------------------------------------
    // Studio — currently used only for its list route (/studio →
    // studio.twig). Editable later if the client wants to manage the
    // bio / services block from /admin.
    // ---------------------------------------------------------------
    'studio_sections' => [
        'label'          => 'Studio',
        'label_singular' => 'Studio section',
        'icon'           => 'layout',
        'route'          => '/studio/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'studio.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title' => ['type' => 'text',     'required' => true, 'label' => 'Heading'],
            'slug'  => ['type' => 'slug',     'required' => true, 'label' => 'Slug'],
            'body'  => ['type' => 'markdown',                     'label' => 'Body'],
        ],
    ],

    // ---------------------------------------------------------------
    // Contact info — list-only page at /contact.
    // ---------------------------------------------------------------
    'contact_info' => [
        'label'          => 'Contact page',
        'label_singular' => 'Contact block',
        'icon'           => 'mail',
        'route'          => '/contact/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'contact.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Heading'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'  => ['type' => 'markdown', 'label' => 'Body'],
        ],
    ],

    // ---------------------------------------------------------------
    // Inquiry form — POST /forms/contact. Submissions surface in
    // /admin/forms/contact. Front-end uses Formspree as a fallback so
    // the static export still works on GitHub Pages.
    // ---------------------------------------------------------------
    'contact' => [
        'label'          => 'Inquiries',
        'label_singular' => 'Inquiry',
        'is_form'        => true,
        'fields' => [
            'name'         => ['type' => 'text',     'required' => true, 'label' => 'Name'],
            'email'        => ['type' => 'text',     'required' => true, 'label' => 'Email'],
            'phone'        => ['type' => 'text',                         'label' => 'Phone'],
            'project_type' => ['type' => 'select',   'required' => true, 'label' => 'Project type',
                               'options' => ['Residence', 'Renovation', 'Small commercial', 'Interior fit-out', 'Planning / feasibility', 'Other']],
            'location'     => ['type' => 'text',                         'label' => 'Project location'],
            'message'      => ['type' => 'textarea', 'required' => true, 'label' => 'About the project'],
        ],
    ],

];
