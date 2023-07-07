@props(['url'])
<tr>
    <td class="header">
        <div class="logo">
            <a href="{{ $url }}" style="display: inline-block;">
                @if (trim($slot) === 'Laravel')
                    <img src="https://tahotz.org/image/TAHOfordarkbckgrnd.png" alt="Laravel Logo">
                @else
                    {{ $slot }}
                @endif
            </a>
        </div>
        <ul class="menu">
            <li><a href="'https://tahotz.org'">Home</a></li>
            <li><a href="'https://tahotz.org/about'">About</a></li>
            <li><a href="'https://tahotz.org/news'">News</a></li>
        </ul>
    </td>
</tr>
