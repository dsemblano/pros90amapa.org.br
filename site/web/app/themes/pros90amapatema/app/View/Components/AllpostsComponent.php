namespace App\View\Components;

use Roots\Acorn\View\Component;

class AllpostsComponent extends Component
{
    public $title;
    public $imageElement;

    protected $imageId;

    public function __construct($title, $imageId = null) {
        $this->title = $title;
        $this->imageId = $imageId;
        $this->imageElement = $this->getImage();
    }

    protected function getImage()
    {
        if (!is_numeric($this->imageId)) {
            return false;
        }
        
        return wp_get_attachment_image($this->imageId, 'medium_large');
    }
}