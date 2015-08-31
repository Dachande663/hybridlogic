<?php

namespace HybridLogic\Flickr\Repository;

use Slab\DB\DatabaseInterface;

/**
 * Photo Repository
 *
 * @package default
 * @author Luke Lanchester
 **/
class PhotoRepository implements PhotoRepositoryInterface {


	/**
	 * @var Slab\DB\DatabaseInterface
	 **/
	protected $db;


	/**
	 * Constructor
	 *
	 * @param Slab\DB\DatabaseInterface
	 * @return void
	 **/
	public function __construct(Slab\DB\DatabaseInterface $db) {

		$this->db = $db;

	}



	/**
	 * Get photos
	 *
	 * @return array Photos
	 **/
	public function get() {

		return $this->db->select()->from('flickr_photos');

	}



	/**
	 * Get single photo
	 *
	 * @return HybridLogic\Flickr\Model\PhotoModel
	 **/
	public function find($id) {

		return $htis->db->select()->from('flickr_photos')->first();

	}



}
