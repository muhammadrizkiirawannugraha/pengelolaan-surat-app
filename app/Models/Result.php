namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter_id',
        'notes',
        'presence_recipients',
    ];

    protected $casts = [
        'presence_recipients' => 'array',
    ];

    public function letter() {
        return $this->belongsTo(Letter::class);
    }

    // If 'User' model has a relationship with 'Result':
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

    // Validation rules example:
    // public static $rules = [
    //     'letter_id' => 'required|exists:letters,id',
    //     'notes' => 'nullable|string',
    //     'presence_recipients' => 'required|array',
    //     // Define more specific rules if necessary for presence_recipients array
    // ];
}
