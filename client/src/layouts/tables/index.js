/**
=========================================================
* Material Dashboard 2 React - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-react
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*/

// @mui material components
import Grid from "@mui/material/Grid";
// import Card from "@mui/material/Card";

// Material Dashboard 2 React components
import MDBox from "components/MDBox";
// import MDTypography from "components/MDTypography";

// Material Dashboard 2 React example components
import DashboardLayout from "examples/LayoutContainers/DashboardLayout";
import DashboardNavbar from "examples/Navbars/DashboardNavbar";
// import Footer from "examples/Footer";
// import DataTable from "examples/Tables/DataTable";

import DefaultProjectCard from "examples/Cards/ProjectCards/DefaultProjectCard";

// Data
// import authorsTableData from "layouts/tables/data/authorsTableData";
// import projectsTableData from "layouts/tables/data/projectsTableData";

import homeDecor1 from "assets/images/home-decor-1.jpg";
import homeDecor2 from "assets/images/home-decor-2.jpg";
import homeDecor3 from "assets/images/home-decor-3.jpg";
import homeDecor4 from "assets/images/home-decor-4.jpeg";
import {useEffect, useState} from "react";
import {getOrgPets, getPets} from "../../apiclient";
import PostCard from "../../components/PostCard/PostCard";
import * as React from "react";
// import team1 from "assets/images/team-1.jpg";
// import team2 from "assets/images/team-2.jpg";
// import team3 from "assets/images/team-3.jpg";
// import team4 from "assets/images/team-4.jpg";

function OrgPetProfiles() {
  const [pets, setPets] = useState([]);
  useEffect(async ()=>{
    const data = await getOrgPets();
    setPets(data);
  },[]);

  return (
    <>
      <MDBox mt={4.5} ml={3}>
        <Grid container spacing={3}>
          { pets.map((pet, index)=>{
            return (
              <PostCard
                sx={{ p:2, m:2}}
                key={index}
                image_url={pet.image_url}
                title={pet.name}
                description={pet.description}
                linkto={`/pet-profile/${pet.id}`}
              />
            )
          })
          }
        </Grid>
      </MDBox>
    </>
  );
}


function Tables() {
  // const { columns, rows } = authorsTableData();
  // const { columns: pColumns, rows: pRows } = projectsTableData();

  return (
    <DashboardLayout>
      <DashboardNavbar />
      <MDBox p={2}>
        <Grid container spacing={6}>
          <OrgPetProfiles />
        </Grid>
      </MDBox>
      {/*
      // <MDBox pt={6} pb={3}>
      //   <Grid container spacing={6}>
      //     <Grid item xs={12}>
      //       <Card>
      //         <MDBox
      //           mx={2}
      //           mt={-3}
      //           py={3}
      //           px={2}
      //           variant="gradient"
      //           bgColor="info"
      //           borderRadius="lg"
      //           coloredShadow="info"
      //         >
      //           <MDTypography variant="h6" color="white">
      //             Pets Data
      //           </MDTypography>
      //         </MDBox>
      //         <MDBox pt={3}>
      //           <DataTable
      //             table={{ columns, rows }}
      //             isSorted={false}
      //             entriesPerPage={false}
      //             showTotalEntries={false}
      //             noEndBorder
      //           />
      //         </MDBox>
      //       </Card>
      //     </Grid> 
         // <Grid item xs={12}>
          //   <Card>
          //     <MDBox
          //       mx={2}
          //       mt={-3}
          //       py={3}
          //       px={2}
          //       variant="gradient"
          //       bgColor="info"
          //       borderRadius="lg"
          //       coloredShadow="info"
          //     >
          //       <MDTypography variant="h6" color="white">
          //         Projects Table
          //       </MDTypography>
          //     </MDBox>
          //     <MDBox pt={3}>
          //       <DataTable
          //         table={{ columns: pColumns, rows: pRows }}
          //         isSorted={false}
          //         entriesPerPage={false}
          //         showTotalEntries={false}
          //         noEndBorder
          //       />
          //     </MDBox>
          //   </Card>
          // </Grid>
      //   </Grid>
      // </MDBox>
    */}
    </DashboardLayout>
  );
}

export default Tables;
