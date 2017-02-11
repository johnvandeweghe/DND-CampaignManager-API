# DND-CampaignManager-API
An api for a Compain Manager for Dungeons and Dragons DMs

## Feature list (plan)
* One secret key gives full access
* Must be able to store/edit/lookup/search for the following types of things:
    * Monsters
    * Items
    * Locations (tree)
        * Shops
    * Factions
    * NPCs
    * PCs (basics)
    * Hooks
    * Temporary notes (for later filing)
* Links between above
* Ability to generate quick Items/NPCs/Shops
* A quick search that searches everything

## Endpoints

### Entries

All other endpoints are sub-entry. But this endpoint gets everything as an entry with a set type.

#### Available Methods

Without element: GET
With element: GET, PATCH, DELETE

#### Fields

* id
* name
* appearance
* notes
* type (one of pc, npc, etc)

### PCs

#### Available Methods

Without element: GET, POST
With element: GET, PATCH, DELETE

#### Fields

* player_name
* name
* appearance
* notes
* max_hit_points
* constitution
* strength
* dexterity
* intelligence
* wisdom
* charisma

### NPCs

### Items

### Locations

### Factions

### Monsters

### Notes
