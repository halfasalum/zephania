<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\GeneralInfo;
use App\Models\Menu;
use App\Models\News;
use App\Models\PageStats;
use App\Models\Service;
use App\Models\WelcomeNote;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function menus(Request $request)
    {
        $lang = $request->get('lang', 'en'); // default en

        $nameColumn = $lang === 'sw' ? 'name_sw' : 'name_en';

        $menus = Menu::select([
            "$nameColumn as name",
            'menu_path'
        ])
            ->where('status', 'active')
            ->get();

        return response()->json($menus);
    }

    public function welcome_note(Request $request)
    {
        $lang = $request->get('lang', 'en'); // default en

        $titleColumn = $lang === 'sw' ? 'title_sw' : 'title_en';
        $contentColumn = $lang === 'sw' ? 'content_sw' : 'content_en';

        $menus = WelcomeNote::select([
            "$titleColumn as title",
            "$contentColumn as content",
            "image_path as image"
        ])
            ->first();

        return response()->json($menus);
    }

    public function services(Request $request)
    {
        $lang = $request->get('lang', 'en'); // default en

        $headerColumn = $lang === 'sw' ? 'header_sw' : 'header_en';
        $subheaderColumn = $lang === 'sw' ? 'sub_header_sw' : 'sub_header_en';

        $services = Service::select([
            "$headerColumn as header",
            "$subheaderColumn as subheader",
            "icon"
        ])
            ->where('is_active', true)
            ->get();

        return response()->json($services);
    }

    public function testimonials(Request $request)
    {
        $lang = $request->get('lang', 'en'); // default en

        $nameColumn = $lang === 'sw' ? 'name_sw' : 'name_en';
        $positionColumn = $lang === 'sw' ? 'position_sw' : 'position_en';
        $contentColumn = $lang === 'sw' ? 'content_sw' : 'content_en';

        $testimonials = News::select([
            "$nameColumn as name",
            "$positionColumn as position",
            "$contentColumn as content",
            "image_path as image"
        ])
            ->where('is_active', true)
            ->get();

        return response()->json($testimonials);
    }

    public function news(Request $request)
    {
        $lang = $request->get('lang', 'en'); // default en

        $titleColumn = $lang === 'sw' ? 'title_sw' : 'title_en';
        $contentColumn = $lang === 'sw' ? 'content_sw' : 'content_en';

        $news = News::select([
            "$titleColumn as title",
            "$contentColumn as content",
            "image",
            "news_date as date"
        ])
            ->where('is_active', true)
            ->get();

        return response()->json($news);
    }

    public function page_stats(Request $request)
    {
        $stats = PageStats::first();
        return response()->json($stats);
    }

    public function whyUs(Request $request)
    {
        $lang = $request->get('lang', 'en'); // default en

        $headerColumn = $lang === 'sw' ? 'header_sw' : 'header_en';
        $subheaderColumn = $lang === 'sw' ? 'sub_header_sw' : 'sub_header_en';
        $item1headerColumn = $lang === 'sw' ? 'item1_header_sw' : 'item1_header_en';
        $item1subheaderColumn = $lang === 'sw' ? 'item1_sub_header_sw' : 'item1_sub_header_en';
        $item2headerColumn = $lang === 'sw' ? 'item2_header_sw' : 'item2_header_en';
        $item2subheaderColumn = $lang === 'sw' ? 'item2_sub_header_sw' : 'item2_sub_header_en';
        $item3headerColumn = $lang === 'sw' ? 'item3_header_sw' : 'item3_header_en';
        $item3subheaderColumn = $lang === 'sw' ? 'item3_sub_header_sw' : 'item3_sub_header_en';

        $whyus = WhyUs::select([
            "$headerColumn as header",
            "$subheaderColumn as subheader",
            "$item1headerColumn as item1_header",
            "$item1subheaderColumn as item1_subheader",
            "$item2headerColumn as item2_header",
            "$item2subheaderColumn as item2_subheader",
            "$item3headerColumn as item3_header",
            "$item3headerColumn as item3_subheader",
            "image_front",
            "image_back"
        ])
            ->first();

        return response()->json($whyus);
    }
    public function aboutUs(Request $request)
    {
        $lang = $request->get('lang', 'en'); // default en

        $headerColumn = $lang === 'sw' ? 'header_sw' : 'header_en';
        $contentsColumn = $lang === 'sw' ? 'contents_sw' : 'contents_en';
        $item1headerColumn = $lang === 'sw' ? 'item1_header_sw' : 'item1_header_en';
        $item1subheaderColumn = $lang === 'sw' ? 'item1_subheader_sw' : 'item1_subheader_en';
        $item2headerColumn = $lang === 'sw' ? 'item2_header_sw' : 'item2_header_en';
        $item2subheaderColumn = $lang === 'sw' ? 'item2_subheader_sw' : 'item2_subheader_en';

        $aboutus = AboutUs::select([
            "$headerColumn as header",
            "$contentsColumn as contents",
            "$item1headerColumn as item1_header",
            "$item1subheaderColumn as item1_subheader",
            "$item2headerColumn as item2_header",
            "$item2subheaderColumn as item2_subheader",
            "experience",
            "image_front",
            "image_back"
        ])
            ->first();

        return response()->json($aboutus);
    }

    public function generalIfo(Request $request)
    {
        $stats = GeneralInfo::first();
        return response()->json($stats);
    }
}
