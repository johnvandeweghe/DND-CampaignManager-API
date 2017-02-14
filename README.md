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
* Links between above (playes belong to factions, live in towns, etc)
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
* related_entries
* type (one of player_character, character, location, faction, etc)

### Characters
Represents an npc, but is also a base for the PC endpoint

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from entries)
* name
* appearance
* notes
* related_entries

#### Fields
* type (one of player_character or character)
* max_hit_points
* constitution
* strength
* dexterity
* intelligence
* wisdom
* charisma

### PCs

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from Characters)
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

#### Fields
* player_name
TODO: Proficiencies?

### Items

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from entries)
* name
* appearance
* notes

#### Fields
* low_value
* fair_value
* high_value

### Locations

### Factions

### Monsters

### Notes
