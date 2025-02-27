namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class StructureController extends Controller
{
    public function index()
    {
        $categories = Category::with('members')->get();
        return view('struktur.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $category->load('members');
        return view('struktur.show', compact('category'));
    }
}
