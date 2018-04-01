import React from 'react';
import { Card, CardHeader, CardTitle, CardMedia, CardText } from 'material-ui/Card';

const ItemCard = ({ author, avatarUrl, title, subtitle, style, children }) => (
  <Card style={style}>
    <CardHeader title={author} avatar={avatarUrl} />
    <CardMedia
      overlay={<CardTitle title={title} subtitle={subtitle}  className="card-media-overlay" />} className="card-media"
    >
      <img src={avatarUrl} alt="" />
    </CardMedia>
    <CardTitle title={author} subtitle={subtitle} />
    <CardText>{children}</CardText>
  </Card>
);

export default ItemCard;