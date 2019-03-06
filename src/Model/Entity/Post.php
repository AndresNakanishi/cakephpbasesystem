<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $slug
 * @property string $img_url
 * @property string $title
 * @property string $content
 * @property int|null $status
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property \Cake\I18n\FrozenTime|null $published_at
 * @property int $user_id
 * @property int $category_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'slug' => true,
        'img_url' => true,
        'title' => true,
        'content' => true,
        'status' => true,
        'created_at' => true,
        'updated_at' => true,
        'published_at' => true,
        'user_id' => true,
        'category_id' => true,
        'user' => true,
        'category' => true
    ];

    protected function _getstate()
    {
        switch ($this->_properties['status']) {
            case 0:
                return 'Papelera';
                break;
            case 1:
                return 'Borrador';
                break;
            case 2:
                return 'Publicado';
                break;
        }
    }

    protected function _geturl()
    {
        return 'blog/'.$this->_properties['slug'];
    }
}
