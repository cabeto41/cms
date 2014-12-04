
<div class="center-text"><h1>{{ $section->name }}</h1></div>
<table class="table no-more-tables">
    <tbody>
        <tr>
            <td><b>Slug URL:</b></td>
            <td class="slug-url">{{ $section->slug_url }}</td>
        </tr>
        <tr>
            <td><b>Show in menu:</b></td>
            <td class="menu">
                {{ $section->menu ? "Show in menu":"Don't show in menu" }}
            </td>
        </tr>
        <tr>
            <td><b>Menu Order:</b></td>
            <td class="menu-order">{{ $section->menu_order }}</td>
        </tr>
        <tr>
            <td><b>Status:</b></td>
            <td class="published">
                {{ $section->published ? "Published":"Draft" }}
            </td>
        </tr>
    </tbody>
</table>


