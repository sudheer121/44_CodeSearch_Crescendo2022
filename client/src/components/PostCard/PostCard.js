import * as React from 'react';
import Card from '@mui/material/Card';
import CardActions from '@mui/material/CardActions';
import CardContent from '@mui/material/CardContent';
import CardMedia from '@mui/material/CardMedia';
import Button from '@mui/material/Button';
import Typography from '@mui/material/Typography';
import {baseRoute} from "../../helpers";
import Link from "@mui/material/Link";

export default function PostCard({ image_url, title, description, linkto}) {
  //const  = props;
  return (
    <Card sx={{ maxWidth: 345, m:1 }}>
      <CardMedia
        component="img"
        height="250"
        image={`${baseRoute}/${image_url}`}
        alt="green iguana"
      />
      <CardContent>
        <Typography gutterBottom variant="h5" component="div">
          <Link href={linkto ?? ''}>
            {title}
          </Link>
        </Typography>
        <Typography variant="body2" color="text.secondary">
          {description}
        </Typography>
      </CardContent>
      {/*<CardActions>*/}
      {/*  <Button size="small">Share</Button>*/}
      {/*  <Button size="small">Learn More</Button>*/}
      {/*</CardActions>*/}
    </Card>
  );
}
