<?php

namespace App\Entity;

use App\Repository\DashboardItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DashboardItemRepository::class)]
class DashboardItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $DashboardItem = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDashboardItem(): ?string
    {
        return $this->DashboardItem;
    }

    public function setDashboardItem(string $DashboardItem): static
    {
        $this->DashboardItem = $DashboardItem;

        return $this;
    }
}
