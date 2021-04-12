# Real  Estate Management System

## Technologies
    -> Laravel 7
    -> JQuery

## Structure
#### Classification of Projects
    -> General Project
    -> Investor Project
##### The only difference between two projects is
    -> In case of Investor Projects, every project is an independent project. (i.e. Every investor project has an individual accounts)
#### Project
      ->project->flats--belongs_to-->customer
Every project has it's own contacts (i.e. Contractors, Suppliers, Engineers, Investors). One project can have multiple of flats/space and every flat of a project belongs to a customer.
##### NB: All invoices will be generated under a project.
## Features

#### General Features
    -> Add, Update Projects and Investor Projects
    -> Add, Update, Delete Contacts [Contactor, Supplier, Engineer, Investor]
    -> Add, Remove Contacts from project
    -> File Storage system from every projects
    -> Add, Update, Delete Project Materials

#### Invoice
To generate Invoice user will provide information through a sequential step by step process. At the end of this processes system will generate an invoice based on user's inputs.

### Accounts

#### General Account
All invoices under all general projects generates General Accounts
##### Filtration
     -> Filter by Project
     -> Filter by Payment method
     -> Filter by Person
     -> Filter by date interval
#### Investor Account
All invoices under an Investor Project generates an Investor Account
##### Filtration
     -> Filter by Payment method
     -> Filter by Person
     -> Filter by date interval
## Demo link
   https://rms-v1.0.1-alpha.maroonlabbd.com/
