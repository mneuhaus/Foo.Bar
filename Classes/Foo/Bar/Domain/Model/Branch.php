<?php
namespace Foo\Bar\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Famelo.ADU".            *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Branch
 *
 * @Flow\Entity
 */
class Branch {

	/**
	 * The name
	 * @var string
	 */
	protected $name;

	/**
	 * The branch
	 * @var \Foo\Bar\Domain\Model\Branch
	 * @ORM\ManyToOne(inversedBy="children", cascade={"all"})
	 */
	protected $branch;

	/**
	 * The branch
	 * @var \Doctrine\Common\Collections\Collection<\Foo\Bar\Domain\Model\Branch>
	 * @ORM\OneToMany(targetEntity="\Foo\Bar\Domain\Model\Branch", mappedBy="branch")
	 */
	protected $children;

	public function __toString() {
		return $this->getName();
	}

	/**
	 * Get the branch's name
	 *
	 * @return string The branch's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Branch's name
	 *
	 * @param string $name The Branch's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Get the branch's branch
	 *
	 * @return branch The branch's branch
	 */
	public function getBranch() {
		return $this->branch;
	}

	/**
	 * Sets this branch's branch
	 *
	 * @param branch $branch The branch's branch
	 * @return void
	 */
	public function setBranch($branch) {
		$this->branch = $branch;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection<\Foo\Bar\Domain\Model\Branch> $children
	 */
	public function setChildren($children) {
		$this->children = $children;
	}

	/**
	 * @return \Doctrine\Common\Collections\Collection<\Foo\Bar\Domain\Model\Branch>
	 */
	public function getChildren() {
		return $this->children;
	}
}
?>